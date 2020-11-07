module.exports = function(grunt) {

    const sass = require('node-sass');
    //получаем строку времени, используется в борьбе с кешем для идентфиикации версии
    var time = new Date().getTime();
    var live_port = time.toString().slice(-4).replace(/^0/gi, '1');

    var opt_obj = {
        src:'app/', //каталог исходников
        scss:'scss/', //внутренний каталог sass файлов
            css:'css/', //внутренний каталог css файлов
        js:'js/', //внутренний каталог js файлов
        style_files:['main.scss','libs.scss','bootstrap.scss'], 
        js_libs: {//опции склейки js libs
            path: 'libs/', //внутренний каталог js libs
            list: [//пути к файлам библиотке
                "lazyload/lazyload.min.js",
                "aos/aos.min.js",
                'fancybox/jquery.fancybox.min.js',
                'swiper/swiper.min.js',
                // 'niceSelect/jquery.nice-select.min.js',
                // 'plyr/plyr.min.js',
                // 'bootstrap/modal.js'
                // 'wow/wow.min.js',
                // 'bootstrap/bootstrap.min.js',
            ],
            out: 'libs.js',//файл склейка в внутеннем каталоге js libs
        },
        localhost_url:'http://localhost/', //путь к размещения на локалке или хостинге(для crit.css)
        main_head_file:'tpl/head.php', //путь к файлу для инжекта crit.css
        dest:'prod/', //каталог продакшена
        
    };
        
        

        opt_obj.sass_files = {};
        
        opt_obj.l_js_files = [];
    for (var i = 0; i < opt_obj.js_libs.list.length; i++) {
            opt_obj.l_js_files[i] = opt_obj.src + opt_obj.js_libs.path + opt_obj.js_libs.list[i]
        }

    opt_obj.d_css_files = [];
    for (var i = 0; i < opt_obj.style_files.length; i++) {
        var key = opt_obj.src+opt_obj.css+opt_obj.style_files[i];

        if(key.indexOf('.scss')>-1){
            key = key.replace('.scss','.css');
        }


        opt_obj.sass_files[key] = opt_obj.src+opt_obj.scss+opt_obj.style_files[i];
        opt_obj.d_css_files = key;
    }


    grunt.option("force", true); //включаем форсирование выполнения

    console.log('opt_obj.sass_files = ',opt_obj.sass_files);
    //иницализация конфига - набора команд
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: { //компиляция sass
            def: {
                options: {
                    implementation: sass,
                    sourceMap: true
                },
                files: opt_obj.sass_files
            }
        },
        concat: { //cклеивание файлов

                    libs_js: {
                        src: opt_obj.l_js_files,
                        dest: opt_obj.src + opt_obj.js + opt_obj.js_libs.out
                    },

            full_css:{
                src:opt_obj.d_css_files,
                dest:opt_obj.dest+opt_obj.css+'full.css'
            },
            crit_css:{

                src:[opt_obj.dest+opt_obj.css+"c/critical_d.css",opt_obj.dest+opt_obj.css+"c/critical_t.css",opt_obj.dest+opt_obj.css+"c/critical_m.css"],
                dest:opt_obj.dest+opt_obj.css+'c/crit.css'
            }

        },

        'string-replace': { //замение текстовых совпадений



            //для test/
            cache: { //внесение данных для сборки
                files: {
                    './': [opt_obj.dest+'**/*.html',opt_obj.dest+opt_obj.js+'**/*.js']
                        /*изменения вносятся в index.html, init.js, main.js
                        .htaccess просто изменяется файл выдачи index.php => index.html*/
                },
                options: {
                    replacements: [{ //добавляем строку ревизии загрузке js файлов(скидывание кеша)
                        pattern: /\.js"/ig,
                        replacement: '.js?v=' + time + '"'
                    }, { //добавляем строку ревизии загрузке js файлов(скидывание кеша)
                        pattern: /\.js'/ig,
                        replacement: ".js?v=" + time + "'"
                    }, { //добавляем строку ревизии загрузке css файлов(скидывание кеша)
                        pattern: /\.css"/ig,
                        replacement: '.css?v=' + time + '"'
                    }, { //добавляем строку ревизии загрузке css файлов(скидывание кеша)
                        pattern: /\.css'/ig,
                        replacement: '.css?v=' + time+ "'"
                    }]
                }
            },
            remove_img_from_crit: { //удалить изображения с выделенного критического css
                files: {
                    './': opt_obj.dest+opt_obj.css+'c/crit.css'
                },
                options: {
                    replacements: [{
                        pattern: /(?:background-image)[ ]*:[ ]*url[ ]*\((.*?)\)[ ]*;/ig,
                        replacement: ' '
                    }]
                }
            },
            php_links: { //удалить изображения с выделенного критического css
                files: {
                    './': [opt_obj.dest+'*.html',opt_obj.dest+'.htaccess']
                },
                options: {
                    replacements: [, { 
                        pattern: /\.php'/ig,
                        replacement: ".html'"
                    },{ 
                        pattern: /\.php"/ig,
                        replacement: '.html"'
                    },{
                        pattern: /\$1\.php\?%1/ig,
                        replacement: '$1.html?%1'
                    },{
                        pattern: /# Rewrite/ig,
                        replacement: 'Rewrite'
                    }]
                }
            },

            livereload: { //cмена порта livereload в index.php
                files: {
                    './': [opt_obj.src+opt_obj.main_head_file]
                },
                options: {
                    replacements: [{
                        pattern: /localhost:\d\d\d\d\/livereload.js/ig,
                        replacement: 'localhost:' + live_port + '/livereload.js'
                    }]
                }

            },
            remove_live: { //закоментировать livereload в index.html
                files: {
                    './': [opt_obj.dest+opt_obj.main_head_file]
                },
                options: {
                    replacements: [{
                        pattern: /<script src="http:\/\/localhost:\d\d\d\d\/livereload\.js"><\/script>/ig,
                        replacement: '<!--  -->'
                    }]
                }

            },
            br_space: { //закоментировать livereload в index.html
                files: {
                    './': opt_obj.dest+'*.html'
                },
                options: {
                    replacements: [{
                        pattern: /<br>/ig,
                        replacement: ' <br>'
                    },{
                        pattern: /@charset "UTF-8";/ig,
                        replacement: ''
                    }]
                }

            }
        },


        clean: { //удаление файлов
            options: {
                force: true //форсируем задание
            },
            dest_start: [opt_obj.dest],
            dest_php: [opt_obj.dest+'*.php'],
            dest_crit: [opt_obj.dest+opt_obj.css+'c/',opt_obj.dest+'tpl/',opt_obj.dest+opt_obj.scss],

        },

        copy: { //копирование файлов

            //для test/
            dest_htta: { //файла настроек сервера(он без имени по этому отдельно) для test/ 
                expand: true,
                flatten: true,
                src: opt_obj.src+'.htaccess',
                dest: opt_obj.dest

            },
            dest_start: { //копия папки сорсов в test/
                expand: true,
                flatten: false,
                cwd: opt_obj.src,
                src: '**',
                dest: opt_obj.dest
            }
        },


        criticalcss: { //выделение критического css


            desktop: { //test для экранов
                options: {
                    url: opt_obj.localhost_url+opt_obj.dest, //урл съема 
                    //ВАЖНО!(Локалхост должен быть запущен и настроен на src)
                    width: 1200, //ширина вьювпорта съема
                    height: 900, //высота вьювпорта съема
                    outputfile: opt_obj.dest+opt_obj.css+"c/critical_d.css", //файл для записи критического
                    filename: opt_obj.dest+opt_obj.css+'full.css', //файл "съема", откуда берется css
                    buffer: 1920 * 1200, //буфер(добавлять css вплоть до такого размера)
                    ignoreConsole: true
                }
            },
            tab: { //test для планшетов
                options: {
                    url: opt_obj.localhost_url+opt_obj.dest,
                    width: 768,
                    height: 1024,
                    outputfile: opt_obj.dest+opt_obj.css+"c/critical_t.css",
                    filename: opt_obj.dest+opt_obj.css+'full.css',
                    buffer: 1024 * 1024,
                    ignoreConsole: true
                }
            },
            mob: { //test для мобилок
                options: {
                    url:opt_obj.localhost_url+opt_obj.dest,
                    width: 320,
                    height: 568,
                    outputfile: opt_obj.dest+opt_obj.css+"c/critical_m.css",
                    filename: opt_obj.dest+opt_obj.css+'full.css',
                    buffer: 800 * 800,
                    ignoreConsole: true
                }
            }
        },

        css_longhand: {
            /*перевод css в long-hand формат(для последующего удаление тегов,
            тут используеться для удаление картинок с кртического css)*/
            prod_crit: { //критический css prod
                expand: true,
                src: [opt_obj.dest+opt_obj.css+'c/crit.css'],
                dest: '',
            },
        },

        php2html: { //перевод php->html
            options: {
                htmlhint: {
                    'attr-lowercase': false,
                    'tagname-lowercase': false,
                }
            },
            prod: { //перевод index.php->index.php в prod/
                files: [{
                    expand: true,
                    cwd: opt_obj.dest,
                    src: ['*.php'],
                    dest: opt_obj.dest,
                    ext: '.html'
                }]
            }
        },

        insert: { //вставка файла в другой файл
            options: {},
            crit_css: { //вставка критического css для test/
                src: opt_obj.dest+opt_obj.css+"c/crit.css",
                dest: opt_obj.dest+opt_obj.main_head_file,
                match: "/*critical.css*/"
            }
            
        },

        autoprefixer: { //autoprefix 
            options: {
                browsers: ['ie >= 8', 'last 10 versions', '> 0.1%', 'ff >= 20', 'Android > 1']
                    /*Набор опций на максимальный автопрефикс*/
            },
            prod: { //автопрефикс css в prod/
                expand: true,
                cwd: opt_obj.dest+opt_obj.css,
                ext: '.css',
                src: ['*.css'],
                dest: opt_obj.dest+opt_obj.css
            }
        },


        htmlmin: { //минификация html
            options: {
                removeComments: true, //удалять коментарии
                collapseWhitespace: true, //удалять лишние пробелы
                minifyJS: true, //сжимать js
                removeAttributeQuotes: false //не удалять кавычки с атрибутов(ВАЖНО!)
            },

            //для prod/
            prod: { //все внутренние html в prod/
                expand: true,
                cwd: opt_obj.dest,
                ext: '.html',
                src: ['**/*.html'],
                dest: opt_obj.dest
            }
        },


        cssmin: { //сжатие css

            prod: { 
               
                files: [{
                  expand: true,
                  cwd: opt_obj.dest+opt_obj.css,
                  src: ['**/*.css'],
                  dest: opt_obj.dest+opt_obj.css,
                  ext: '.css'
                }]
            },
            crit: { 
               
                files: [{
                  expand: true,
                  cwd: opt_obj.dest+opt_obj.css+'c/',
                  src: ['crit.css'],
                  dest: opt_obj.dest+opt_obj.css+'c/',
                  ext: '.css'
                }]
            }
        },


        uglify: { //сжатие js
            prod: { //сжатие js продакшена
                options: {
                    compress: {
                        drop_console: true //удалять consle.log() строчки
                    }
                },
                files: [{
                    expand: true,
                    cwd: opt_obj.dest+opt_obj.js,
                    src: '**/*.js',
                    dest: opt_obj.dest+opt_obj.js
                }]
            }
        },


        watch: { //"слежка" за изменеиями в файлах

            sass: {
                files: [opt_obj.src+'**/*.scss'], //при изменениях в scss
                tasks: ['sass'] //скомпилировать sass
            },

                        libs_concat: {
                            files: [opt_obj.src + opt_obj.js_libs.path + '**/*.js'], //при изменениях в scss
                            tasks: ['concat:libs_js'] //скомпилировать sass
                        },

            livereload: { //перезагрузка страницы в браузере
                options: {
                    spawn: true,
                    livereload: {
                        host: 'localhost',
                        port: live_port, //LIVERELOAD_PORT
                    }
                },
                //при изменеии любых сорс файлов
                files: [opt_obj.src+'**/*.php', opt_obj.src+'**/*.js', opt_obj.src+'**/*.css', opt_obj.src+'**/*.html'],
                tasks: []
            }
        }
    });

    //загрузка модулей grunt
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify-es');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-string-replace');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-criticalcss');
    grunt.loadNpmTasks('grunt-insert');
    grunt.loadNpmTasks('grunt-php2html');
    grunt.loadNpmTasks('grunt-css-longhand');

    grunt.registerTask('default', [
            'concat:libs_js',
        'sass',
        'string-replace:livereload',
        'watch']
        );

    grunt.registerTask('fin', [
            'concat:libs_js',
        'sass',
        'clean:dest_start',
        'copy',
        'string-replace:remove_live',
        'concat:full_css',
        'criticalcss',
        'concat:crit_css',
        'css_longhand',
        'string-replace:remove_img_from_crit',
        'cssmin:crit',
        'insert',
        'php2html',
        'string-replace:php_links',
        'clean:dest_php',
        'clean:dest_crit',
        'string-replace:cache',
        'autoprefixer',
        'cssmin:prod',
        'htmlmin',
        'uglify',
        'string-replace:br_space'




        ]);

};