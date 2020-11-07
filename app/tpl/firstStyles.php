<style>
/*!
 * Bootstrap Reboot v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Forked from Normalize.css, licensed MIT (https://github.com/necolas/normalize.css/blob/master/LICENSE.md)
 */
 *,
*::before,
*::after {
  box-sizing: border-box; }

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

@-ms-viewport {
  width: device-width; }

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block; }

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff; }

[tabindex="-1"]:focus {
  outline: 0 !important; }

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

dfn {
  font-style: italic; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects; }
  a:hover {
    color: #0056b3;
    text-decoration: underline; }

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none; }
  a:not([href]):not([tabindex]):focus {
    outline: 0; }

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg:not(:root) {
  overflow: hidden; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: .5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

/*!
 * Bootstrap Grid v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
@-ms-viewport {
  width: device-width; }

html {
  box-sizing: border-box;
  -ms-overflow-style: scrollbar; }

*,
*::before,
*::after {
  box-sizing: inherit; }

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px; }

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%; }

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: none; }

.col-1 {
  flex: 0 0 8.3333333333%;
  max-width: 8.3333333333%; }

.col-2 {
  flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%; }

.col-3 {
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%; }

.col-5 {
  flex: 0 0 41.6666666667%;
  max-width: 41.6666666667%; }

.col-6 {
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  flex: 0 0 58.3333333333%;
  max-width: 58.3333333333%; }

.col-8 {
  flex: 0 0 66.6666666667%;
  max-width: 66.6666666667%; }

.col-9 {
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  flex: 0 0 83.3333333333%;
  max-width: 83.3333333333%; }

.col-11 {
  flex: 0 0 91.6666666667%;
  max-width: 91.6666666667%; }

.col-12 {
  flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  order: -1; }

.order-last {
  order: 13; }

.order-0 {
  order: 0; }

.order-1 {
  order: 1; }

.order-2 {
  order: 2; }

.order-3 {
  order: 3; }

.order-4 {
  order: 4; }

.order-5 {
  order: 5; }

.order-6 {
  order: 6; }

.order-7 {
  order: 7; }

.order-8 {
  order: 8; }

.order-9 {
  order: 9; }

.order-10 {
  order: 10; }

.order-11 {
  order: 11; }

.order-12 {
  order: 12; }

.offset-1 {
  margin-left: 8.3333333333%; }

.offset-2 {
  margin-left: 16.6666666667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.3333333333%; }

.offset-5 {
  margin-left: 41.6666666667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.3333333333%; }

.offset-8 {
  margin-left: 66.6666666667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.3333333333%; }

.offset-11 {
  margin-left: 91.6666666667%; }

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-sm-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%; }
  .col-sm-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%; }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%; }
  .col-sm-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%; }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%; }
  .col-sm-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%; }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%; }
  .col-sm-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%; }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    order: -1; }
  .order-sm-last {
    order: 13; }
  .order-sm-0 {
    order: 0; }
  .order-sm-1 {
    order: 1; }
  .order-sm-2 {
    order: 2; }
  .order-sm-3 {
    order: 3; }
  .order-sm-4 {
    order: 4; }
  .order-sm-5 {
    order: 5; }
  .order-sm-6 {
    order: 6; }
  .order-sm-7 {
    order: 7; }
  .order-sm-8 {
    order: 8; }
  .order-sm-9 {
    order: 9; }
  .order-sm-10 {
    order: 10; }
  .order-sm-11 {
    order: 11; }
  .order-sm-12 {
    order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.3333333333%; }
  .offset-sm-2 {
    margin-left: 16.6666666667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.3333333333%; }
  .offset-sm-5 {
    margin-left: 41.6666666667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.3333333333%; }
  .offset-sm-8 {
    margin-left: 66.6666666667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.3333333333%; }
  .offset-sm-11 {
    margin-left: 91.6666666667%; } }

@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-md-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%; }
  .col-md-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%; }
  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%; }
  .col-md-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%; }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%; }
  .col-md-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%; }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%; }
  .col-md-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%; }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    order: -1; }
  .order-md-last {
    order: 13; }
  .order-md-0 {
    order: 0; }
  .order-md-1 {
    order: 1; }
  .order-md-2 {
    order: 2; }
  .order-md-3 {
    order: 3; }
  .order-md-4 {
    order: 4; }
  .order-md-5 {
    order: 5; }
  .order-md-6 {
    order: 6; }
  .order-md-7 {
    order: 7; }
  .order-md-8 {
    order: 8; }
  .order-md-9 {
    order: 9; }
  .order-md-10 {
    order: 10; }
  .order-md-11 {
    order: 11; }
  .order-md-12 {
    order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.3333333333%; }
  .offset-md-2 {
    margin-left: 16.6666666667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.3333333333%; }
  .offset-md-5 {
    margin-left: 41.6666666667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.3333333333%; }
  .offset-md-8 {
    margin-left: 66.6666666667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.3333333333%; }
  .offset-md-11 {
    margin-left: 91.6666666667%; } }

@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-lg-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%; }
  .col-lg-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%; }
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%; }
  .col-lg-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%; }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%; }
  .col-lg-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%; }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%; }
  .col-lg-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%; }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    order: -1; }
  .order-lg-last {
    order: 13; }
  .order-lg-0 {
    order: 0; }
  .order-lg-1 {
    order: 1; }
  .order-lg-2 {
    order: 2; }
  .order-lg-3 {
    order: 3; }
  .order-lg-4 {
    order: 4; }
  .order-lg-5 {
    order: 5; }
  .order-lg-6 {
    order: 6; }
  .order-lg-7 {
    order: 7; }
  .order-lg-8 {
    order: 8; }
  .order-lg-9 {
    order: 9; }
  .order-lg-10 {
    order: 10; }
  .order-lg-11 {
    order: 11; }
  .order-lg-12 {
    order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.3333333333%; }
  .offset-lg-2 {
    margin-left: 16.6666666667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.3333333333%; }
  .offset-lg-5 {
    margin-left: 41.6666666667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.3333333333%; }
  .offset-lg-8 {
    margin-left: 66.6666666667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.3333333333%; }
  .offset-lg-11 {
    margin-left: 91.6666666667%; } }

@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-xl-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%; }
  .col-xl-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%; }
  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%; }
  .col-xl-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%; }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%; }
  .col-xl-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%; }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%; }
  .col-xl-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%; }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    order: -1; }
  .order-xl-last {
    order: 13; }
  .order-xl-0 {
    order: 0; }
  .order-xl-1 {
    order: 1; }
  .order-xl-2 {
    order: 2; }
  .order-xl-3 {
    order: 3; }
  .order-xl-4 {
    order: 4; }
  .order-xl-5 {
    order: 5; }
  .order-xl-6 {
    order: 6; }
  .order-xl-7 {
    order: 7; }
  .order-xl-8 {
    order: 8; }
  .order-xl-9 {
    order: 9; }
  .order-xl-10 {
    order: 10; }
  .order-xl-11 {
    order: 11; }
  .order-xl-12 {
    order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.3333333333%; }
  .offset-xl-2 {
    margin-left: 16.6666666667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.3333333333%; }
  .offset-xl-5 {
    margin-left: 41.6666666667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.3333333333%; }
  .offset-xl-8 {
    margin-left: 66.6666666667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.3333333333%; }
  .offset-xl-11 {
    margin-left: 91.6666666667%; } }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: flex !important; }

.d-inline-flex {
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: flex !important; }
  .d-sm-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: flex !important; }
  .d-md-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: flex !important; }
  .d-lg-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: flex !important; }
  .d-xl-inline-flex {
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: flex !important; }
  .d-print-inline-flex {
    display: inline-flex !important; } }

.flex-row {
  flex-direction: row !important; }

.flex-column {
  flex-direction: column !important; }

.flex-row-reverse {
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  flex-direction: column-reverse !important; }

.flex-wrap {
  flex-wrap: wrap !important; }

.flex-nowrap {
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important; }

.justify-content-start {
  justify-content: flex-start !important; }

.justify-content-end {
  justify-content: flex-end !important; }

.justify-content-center {
  justify-content: center !important; }

.justify-content-between {
  justify-content: space-between !important; }

.justify-content-around {
  justify-content: space-around !important; }

.align-items-start {
  align-items: flex-start !important; }

.align-items-end {
  align-items: flex-end !important; }

.align-items-center {
  align-items: center !important; }

.align-items-baseline {
  align-items: baseline !important; }

.align-items-stretch {
  align-items: stretch !important; }

.align-content-start {
  align-content: flex-start !important; }

.align-content-end {
  align-content: flex-end !important; }

.align-content-center {
  align-content: center !important; }

.align-content-between {
  align-content: space-between !important; }

.align-content-around {
  align-content: space-around !important; }

.align-content-stretch {
  align-content: stretch !important; }

.align-self-auto {
  align-self: auto !important; }

.align-self-start {
  align-self: flex-start !important; }

.align-self-end {
  align-self: flex-end !important; }

.align-self-center {
  align-self: center !important; }

.align-self-baseline {
  align-self: baseline !important; }

.align-self-stretch {
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important; }
  .flex-sm-column {
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-sm-start {
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    justify-content: center !important; }
  .justify-content-sm-between {
    justify-content: space-between !important; }
  .justify-content-sm-around {
    justify-content: space-around !important; }
  .align-items-sm-start {
    align-items: flex-start !important; }
  .align-items-sm-end {
    align-items: flex-end !important; }
  .align-items-sm-center {
    align-items: center !important; }
  .align-items-sm-baseline {
    align-items: baseline !important; }
  .align-items-sm-stretch {
    align-items: stretch !important; }
  .align-content-sm-start {
    align-content: flex-start !important; }
  .align-content-sm-end {
    align-content: flex-end !important; }
  .align-content-sm-center {
    align-content: center !important; }
  .align-content-sm-between {
    align-content: space-between !important; }
  .align-content-sm-around {
    align-content: space-around !important; }
  .align-content-sm-stretch {
    align-content: stretch !important; }
  .align-self-sm-auto {
    align-self: auto !important; }
  .align-self-sm-start {
    align-self: flex-start !important; }
  .align-self-sm-end {
    align-self: flex-end !important; }
  .align-self-sm-center {
    align-self: center !important; }
  .align-self-sm-baseline {
    align-self: baseline !important; }
  .align-self-sm-stretch {
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important; }
  .flex-md-column {
    flex-direction: column !important; }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-md-start {
    justify-content: flex-start !important; }
  .justify-content-md-end {
    justify-content: flex-end !important; }
  .justify-content-md-center {
    justify-content: center !important; }
  .justify-content-md-between {
    justify-content: space-between !important; }
  .justify-content-md-around {
    justify-content: space-around !important; }
  .align-items-md-start {
    align-items: flex-start !important; }
  .align-items-md-end {
    align-items: flex-end !important; }
  .align-items-md-center {
    align-items: center !important; }
  .align-items-md-baseline {
    align-items: baseline !important; }
  .align-items-md-stretch {
    align-items: stretch !important; }
  .align-content-md-start {
    align-content: flex-start !important; }
  .align-content-md-end {
    align-content: flex-end !important; }
  .align-content-md-center {
    align-content: center !important; }
  .align-content-md-between {
    align-content: space-between !important; }
  .align-content-md-around {
    align-content: space-around !important; }
  .align-content-md-stretch {
    align-content: stretch !important; }
  .align-self-md-auto {
    align-self: auto !important; }
  .align-self-md-start {
    align-self: flex-start !important; }
  .align-self-md-end {
    align-self: flex-end !important; }
  .align-self-md-center {
    align-self: center !important; }
  .align-self-md-baseline {
    align-self: baseline !important; }
  .align-self-md-stretch {
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important; }
  .flex-lg-column {
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-lg-start {
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    justify-content: center !important; }
  .justify-content-lg-between {
    justify-content: space-between !important; }
  .justify-content-lg-around {
    justify-content: space-around !important; }
  .align-items-lg-start {
    align-items: flex-start !important; }
  .align-items-lg-end {
    align-items: flex-end !important; }
  .align-items-lg-center {
    align-items: center !important; }
  .align-items-lg-baseline {
    align-items: baseline !important; }
  .align-items-lg-stretch {
    align-items: stretch !important; }
  .align-content-lg-start {
    align-content: flex-start !important; }
  .align-content-lg-end {
    align-content: flex-end !important; }
  .align-content-lg-center {
    align-content: center !important; }
  .align-content-lg-between {
    align-content: space-between !important; }
  .align-content-lg-around {
    align-content: space-around !important; }
  .align-content-lg-stretch {
    align-content: stretch !important; }
  .align-self-lg-auto {
    align-self: auto !important; }
  .align-self-lg-start {
    align-self: flex-start !important; }
  .align-self-lg-end {
    align-self: flex-end !important; }
  .align-self-lg-center {
    align-self: center !important; }
  .align-self-lg-baseline {
    align-self: baseline !important; }
  .align-self-lg-stretch {
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important; }
  .flex-xl-column {
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-xl-start {
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    justify-content: center !important; }
  .justify-content-xl-between {
    justify-content: space-between !important; }
  .justify-content-xl-around {
    justify-content: space-around !important; }
  .align-items-xl-start {
    align-items: flex-start !important; }
  .align-items-xl-end {
    align-items: flex-end !important; }
  .align-items-xl-center {
    align-items: center !important; }
  .align-items-xl-baseline {
    align-items: baseline !important; }
  .align-items-xl-stretch {
    align-items: stretch !important; }
  .align-content-xl-start {
    align-content: flex-start !important; }
  .align-content-xl-end {
    align-content: flex-end !important; }
  .align-content-xl-center {
    align-content: center !important; }
  .align-content-xl-between {
    align-content: space-between !important; }
  .align-content-xl-around {
    align-content: space-around !important; }
  .align-content-xl-stretch {
    align-content: stretch !important; }
  .align-self-xl-auto {
    align-self: auto !important; }
  .align-self-xl-start {
    align-self: flex-start !important; }
  .align-self-xl-end {
    align-self: flex-end !important; }
  .align-self-xl-center {
    align-self: center !important; }
  .align-self-xl-baseline {
    align-self: baseline !important; }
  .align-self-xl-stretch {
    align-self: stretch !important; } }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: flex !important; }

.d-inline-flex {
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: flex !important; }
  .d-sm-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: flex !important; }
  .d-md-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: flex !important; }
  .d-lg-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: flex !important; }
  .d-xl-inline-flex {
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: flex !important; }
  .d-print-inline-flex {
    display: inline-flex !important; } }

.flex-row {
  flex-direction: row !important; }

.flex-column {
  flex-direction: column !important; }

.flex-row-reverse {
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  flex-direction: column-reverse !important; }

.flex-wrap {
  flex-wrap: wrap !important; }

.flex-nowrap {
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important; }

.justify-content-start {
  justify-content: flex-start !important; }

.justify-content-end {
  justify-content: flex-end !important; }

.justify-content-center {
  justify-content: center !important; }

.justify-content-between {
  justify-content: space-between !important; }

.justify-content-around {
  justify-content: space-around !important; }

.align-items-start {
  align-items: flex-start !important; }

.align-items-end {
  align-items: flex-end !important; }

.align-items-center {
  align-items: center !important; }

.align-items-baseline {
  align-items: baseline !important; }

.align-items-stretch {
  align-items: stretch !important; }

.align-content-start {
  align-content: flex-start !important; }

.align-content-end {
  align-content: flex-end !important; }

.align-content-center {
  align-content: center !important; }

.align-content-between {
  align-content: space-between !important; }

.align-content-around {
  align-content: space-around !important; }

.align-content-stretch {
  align-content: stretch !important; }

.align-self-auto {
  align-self: auto !important; }

.align-self-start {
  align-self: flex-start !important; }

.align-self-end {
  align-self: flex-end !important; }

.align-self-center {
  align-self: center !important; }

.align-self-baseline {
  align-self: baseline !important; }

.align-self-stretch {
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important; }
  .flex-sm-column {
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-sm-start {
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    justify-content: center !important; }
  .justify-content-sm-between {
    justify-content: space-between !important; }
  .justify-content-sm-around {
    justify-content: space-around !important; }
  .align-items-sm-start {
    align-items: flex-start !important; }
  .align-items-sm-end {
    align-items: flex-end !important; }
  .align-items-sm-center {
    align-items: center !important; }
  .align-items-sm-baseline {
    align-items: baseline !important; }
  .align-items-sm-stretch {
    align-items: stretch !important; }
  .align-content-sm-start {
    align-content: flex-start !important; }
  .align-content-sm-end {
    align-content: flex-end !important; }
  .align-content-sm-center {
    align-content: center !important; }
  .align-content-sm-between {
    align-content: space-between !important; }
  .align-content-sm-around {
    align-content: space-around !important; }
  .align-content-sm-stretch {
    align-content: stretch !important; }
  .align-self-sm-auto {
    align-self: auto !important; }
  .align-self-sm-start {
    align-self: flex-start !important; }
  .align-self-sm-end {
    align-self: flex-end !important; }
  .align-self-sm-center {
    align-self: center !important; }
  .align-self-sm-baseline {
    align-self: baseline !important; }
  .align-self-sm-stretch {
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important; }
  .flex-md-column {
    flex-direction: column !important; }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-md-start {
    justify-content: flex-start !important; }
  .justify-content-md-end {
    justify-content: flex-end !important; }
  .justify-content-md-center {
    justify-content: center !important; }
  .justify-content-md-between {
    justify-content: space-between !important; }
  .justify-content-md-around {
    justify-content: space-around !important; }
  .align-items-md-start {
    align-items: flex-start !important; }
  .align-items-md-end {
    align-items: flex-end !important; }
  .align-items-md-center {
    align-items: center !important; }
  .align-items-md-baseline {
    align-items: baseline !important; }
  .align-items-md-stretch {
    align-items: stretch !important; }
  .align-content-md-start {
    align-content: flex-start !important; }
  .align-content-md-end {
    align-content: flex-end !important; }
  .align-content-md-center {
    align-content: center !important; }
  .align-content-md-between {
    align-content: space-between !important; }
  .align-content-md-around {
    align-content: space-around !important; }
  .align-content-md-stretch {
    align-content: stretch !important; }
  .align-self-md-auto {
    align-self: auto !important; }
  .align-self-md-start {
    align-self: flex-start !important; }
  .align-self-md-end {
    align-self: flex-end !important; }
  .align-self-md-center {
    align-self: center !important; }
  .align-self-md-baseline {
    align-self: baseline !important; }
  .align-self-md-stretch {
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important; }
  .flex-lg-column {
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-lg-start {
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    justify-content: center !important; }
  .justify-content-lg-between {
    justify-content: space-between !important; }
  .justify-content-lg-around {
    justify-content: space-around !important; }
  .align-items-lg-start {
    align-items: flex-start !important; }
  .align-items-lg-end {
    align-items: flex-end !important; }
  .align-items-lg-center {
    align-items: center !important; }
  .align-items-lg-baseline {
    align-items: baseline !important; }
  .align-items-lg-stretch {
    align-items: stretch !important; }
  .align-content-lg-start {
    align-content: flex-start !important; }
  .align-content-lg-end {
    align-content: flex-end !important; }
  .align-content-lg-center {
    align-content: center !important; }
  .align-content-lg-between {
    align-content: space-between !important; }
  .align-content-lg-around {
    align-content: space-around !important; }
  .align-content-lg-stretch {
    align-content: stretch !important; }
  .align-self-lg-auto {
    align-self: auto !important; }
  .align-self-lg-start {
    align-self: flex-start !important; }
  .align-self-lg-end {
    align-self: flex-end !important; }
  .align-self-lg-center {
    align-self: center !important; }
  .align-self-lg-baseline {
    align-self: baseline !important; }
  .align-self-lg-stretch {
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important; }
  .flex-xl-column {
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-xl-start {
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    justify-content: center !important; }
  .justify-content-xl-between {
    justify-content: space-between !important; }
  .justify-content-xl-around {
    justify-content: space-around !important; }
  .align-items-xl-start {
    align-items: flex-start !important; }
  .align-items-xl-end {
    align-items: flex-end !important; }
  .align-items-xl-center {
    align-items: center !important; }
  .align-items-xl-baseline {
    align-items: baseline !important; }
  .align-items-xl-stretch {
    align-items: stretch !important; }
  .align-content-xl-start {
    align-content: flex-start !important; }
  .align-content-xl-end {
    align-content: flex-end !important; }
  .align-content-xl-center {
    align-content: center !important; }
  .align-content-xl-between {
    align-content: space-between !important; }
  .align-content-xl-around {
    align-content: space-around !important; }
  .align-content-xl-stretch {
    align-content: stretch !important; }
  .align-self-xl-auto {
    align-self: auto !important; }
  .align-self-xl-start {
    align-self: flex-start !important; }
  .align-self-xl-end {
    align-self: flex-end !important; }
  .align-self-xl-center {
    align-self: center !important; }
  .align-self-xl-baseline {
    align-self: baseline !important; }
  .align-self-xl-stretch {
    align-self: stretch !important; } }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020; } }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3,
.my-3 {
  margin-top: 1rem !important; }

.mr-3,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

.text-justify {
  text-align: justify !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #fff !important; }

.text-primary {
  color: #007bff !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #0062cc !important; }

.text-secondary {
  color: #6c757d !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #545b62 !important; }

.text-success {
  color: #28a745 !important; }

a.text-success:hover, a.text-success:focus {
  color: #1e7e34 !important; }

.text-info {
  color: #17a2b8 !important; }

a.text-info:hover, a.text-info:focus {
  color: #117a8b !important; }

.text-warning {
  color: #ffc107 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #d39e00 !important; }

.text-danger {
  color: #dc3545 !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #bd2130 !important; }

.text-light {
  color: #f8f9fa !important; }

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important; }

.text-dark {
  color: #343a40 !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #1d2124 !important; }

.text-muted {
  color: #6c757d !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem; }
  .navbar > .container,
  .navbar > .container-fluid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between; }

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static;
    float: none; }

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }
  .navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-sm .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; }
    .navbar-expand-sm .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-md .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; }
    .navbar-expand-md .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-lg .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; }
    .navbar-expand-lg .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
      flex-wrap: nowrap; }
    .navbar-expand-xl .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; }
    .navbar-expand-xl .dropup .dropdown-menu {
      top: auto;
      bottom: 100%; } }

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    padding-right: 0;
    padding-left: 0; }
  .navbar-expand .navbar-nav {
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .dropdown-menu-right {
      right: 0;
      left: auto; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    flex-wrap: nowrap; }
  .navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }
  .navbar-expand .dropup .dropdown-menu {
    top: auto;
    bottom: 100%; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
      color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-text a {
    color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
      color: #fff; }

@media screen and (min-width: 992px) {
  [data-aos][data-aos][data-aos-duration="50"], body[data-aos-duration="50"] [data-aos] {
    transition-duration: 50ms; }
  [data-aos][data-aos][data-aos-delay="50"], body[data-aos-delay="50"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="50"].aos-animate, body[data-aos-delay="50"] [data-aos].aos-animate {
    transition-delay: 50ms; }
  [data-aos][data-aos][data-aos-duration="100"], body[data-aos-duration="100"] [data-aos] {
    transition-duration: .1s; }
  [data-aos][data-aos][data-aos-delay="100"], body[data-aos-delay="100"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="100"].aos-animate, body[data-aos-delay="100"] [data-aos].aos-animate {
    transition-delay: .1s; }
  [data-aos][data-aos][data-aos-duration="150"], body[data-aos-duration="150"] [data-aos] {
    transition-duration: .15s; }
  [data-aos][data-aos][data-aos-delay="150"], body[data-aos-delay="150"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="150"].aos-animate, body[data-aos-delay="150"] [data-aos].aos-animate {
    transition-delay: .15s; }
  [data-aos][data-aos][data-aos-duration="200"], body[data-aos-duration="200"] [data-aos] {
    transition-duration: .2s; }
  [data-aos][data-aos][data-aos-delay="200"], body[data-aos-delay="200"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="200"].aos-animate, body[data-aos-delay="200"] [data-aos].aos-animate {
    transition-delay: .2s; }
  [data-aos][data-aos][data-aos-duration="250"], body[data-aos-duration="250"] [data-aos] {
    transition-duration: .25s; }
  [data-aos][data-aos][data-aos-delay="250"], body[data-aos-delay="250"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="250"].aos-animate, body[data-aos-delay="250"] [data-aos].aos-animate {
    transition-delay: .25s; }
  [data-aos][data-aos][data-aos-duration="300"], body[data-aos-duration="300"] [data-aos] {
    transition-duration: .3s; }
  [data-aos][data-aos][data-aos-delay="300"], body[data-aos-delay="300"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="300"].aos-animate, body[data-aos-delay="300"] [data-aos].aos-animate {
    transition-delay: .3s; }
  [data-aos][data-aos][data-aos-duration="350"], body[data-aos-duration="350"] [data-aos] {
    transition-duration: .35s; }
  [data-aos][data-aos][data-aos-delay="350"], body[data-aos-delay="350"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="350"].aos-animate, body[data-aos-delay="350"] [data-aos].aos-animate {
    transition-delay: .35s; }
  [data-aos][data-aos][data-aos-duration="400"], body[data-aos-duration="400"] [data-aos] {
    transition-duration: .4s; }
  [data-aos][data-aos][data-aos-delay="400"], body[data-aos-delay="400"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="400"].aos-animate, body[data-aos-delay="400"] [data-aos].aos-animate {
    transition-delay: .4s; }
  [data-aos][data-aos][data-aos-duration="450"], body[data-aos-duration="450"] [data-aos] {
    transition-duration: .45s; }
  [data-aos][data-aos][data-aos-delay="450"], body[data-aos-delay="450"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="450"].aos-animate, body[data-aos-delay="450"] [data-aos].aos-animate {
    transition-delay: .45s; }
  [data-aos][data-aos][data-aos-duration="500"], body[data-aos-duration="500"] [data-aos] {
    transition-duration: .5s; }
  [data-aos][data-aos][data-aos-delay="500"], body[data-aos-delay="500"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="500"].aos-animate, body[data-aos-delay="500"] [data-aos].aos-animate {
    transition-delay: .5s; }
  [data-aos][data-aos][data-aos-duration="550"], body[data-aos-duration="550"] [data-aos] {
    transition-duration: .55s; }
  [data-aos][data-aos][data-aos-delay="550"], body[data-aos-delay="550"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="550"].aos-animate, body[data-aos-delay="550"] [data-aos].aos-animate {
    transition-delay: .55s; }
  [data-aos][data-aos][data-aos-duration="600"], body[data-aos-duration="600"] [data-aos] {
    transition-duration: .6s; }
  [data-aos][data-aos][data-aos-delay="600"], body[data-aos-delay="600"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="600"].aos-animate, body[data-aos-delay="600"] [data-aos].aos-animate {
    transition-delay: .6s; }
  [data-aos][data-aos][data-aos-duration="650"], body[data-aos-duration="650"] [data-aos] {
    transition-duration: .65s; }
  [data-aos][data-aos][data-aos-delay="650"], body[data-aos-delay="650"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="650"].aos-animate, body[data-aos-delay="650"] [data-aos].aos-animate {
    transition-delay: .65s; }
  [data-aos][data-aos][data-aos-duration="700"], body[data-aos-duration="700"] [data-aos] {
    transition-duration: .7s; }
  [data-aos][data-aos][data-aos-delay="700"], body[data-aos-delay="700"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="700"].aos-animate, body[data-aos-delay="700"] [data-aos].aos-animate {
    transition-delay: .7s; }
  [data-aos][data-aos][data-aos-duration="750"], body[data-aos-duration="750"] [data-aos] {
    transition-duration: .75s; }
  [data-aos][data-aos][data-aos-delay="750"], body[data-aos-delay="750"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="750"].aos-animate, body[data-aos-delay="750"] [data-aos].aos-animate {
    transition-delay: .75s; }
  [data-aos][data-aos][data-aos-duration="800"], body[data-aos-duration="800"] [data-aos] {
    transition-duration: .8s; }
  [data-aos][data-aos][data-aos-delay="800"], body[data-aos-delay="800"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="800"].aos-animate, body[data-aos-delay="800"] [data-aos].aos-animate {
    transition-delay: .8s; }
  [data-aos][data-aos][data-aos-duration="850"], body[data-aos-duration="850"] [data-aos] {
    transition-duration: .85s; }
  [data-aos][data-aos][data-aos-delay="850"], body[data-aos-delay="850"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="850"].aos-animate, body[data-aos-delay="850"] [data-aos].aos-animate {
    transition-delay: .85s; }
  [data-aos][data-aos][data-aos-duration="900"], body[data-aos-duration="900"] [data-aos] {
    transition-duration: .9s; }
  [data-aos][data-aos][data-aos-delay="900"], body[data-aos-delay="900"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="900"].aos-animate, body[data-aos-delay="900"] [data-aos].aos-animate {
    transition-delay: .9s; }
  [data-aos][data-aos][data-aos-duration="950"], body[data-aos-duration="950"] [data-aos] {
    transition-duration: .95s; }
  [data-aos][data-aos][data-aos-delay="950"], body[data-aos-delay="950"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="950"].aos-animate, body[data-aos-delay="950"] [data-aos].aos-animate {
    transition-delay: .95s; }
  [data-aos][data-aos][data-aos-duration="1000"], body[data-aos-duration="1000"] [data-aos] {
    transition-duration: 1s; }
  [data-aos][data-aos][data-aos-delay="1000"], body[data-aos-delay="1000"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1000"].aos-animate, body[data-aos-delay="1000"] [data-aos].aos-animate {
    transition-delay: 1s; }
  [data-aos][data-aos][data-aos-duration="1050"], body[data-aos-duration="1050"] [data-aos] {
    transition-duration: 1.05s; }
  [data-aos][data-aos][data-aos-delay="1050"], body[data-aos-delay="1050"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1050"].aos-animate, body[data-aos-delay="1050"] [data-aos].aos-animate {
    transition-delay: 1.05s; }
  [data-aos][data-aos][data-aos-duration="1100"], body[data-aos-duration="1100"] [data-aos] {
    transition-duration: 1.1s; }
  [data-aos][data-aos][data-aos-delay="1100"], body[data-aos-delay="1100"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1100"].aos-animate, body[data-aos-delay="1100"] [data-aos].aos-animate {
    transition-delay: 1.1s; }
  [data-aos][data-aos][data-aos-duration="1150"], body[data-aos-duration="1150"] [data-aos] {
    transition-duration: 1.15s; }
  [data-aos][data-aos][data-aos-delay="1150"], body[data-aos-delay="1150"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1150"].aos-animate, body[data-aos-delay="1150"] [data-aos].aos-animate {
    transition-delay: 1.15s; }
  [data-aos][data-aos][data-aos-duration="1200"], body[data-aos-duration="1200"] [data-aos] {
    transition-duration: 1.2s; }
  [data-aos][data-aos][data-aos-delay="1200"], body[data-aos-delay="1200"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1200"].aos-animate, body[data-aos-delay="1200"] [data-aos].aos-animate {
    transition-delay: 1.2s; }
  [data-aos][data-aos][data-aos-duration="1250"], body[data-aos-duration="1250"] [data-aos] {
    transition-duration: 1.25s; }
  [data-aos][data-aos][data-aos-delay="1250"], body[data-aos-delay="1250"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1250"].aos-animate, body[data-aos-delay="1250"] [data-aos].aos-animate {
    transition-delay: 1.25s; }
  [data-aos][data-aos][data-aos-duration="1300"], body[data-aos-duration="1300"] [data-aos] {
    transition-duration: 1.3s; }
  [data-aos][data-aos][data-aos-delay="1300"], body[data-aos-delay="1300"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1300"].aos-animate, body[data-aos-delay="1300"] [data-aos].aos-animate {
    transition-delay: 1.3s; }
  [data-aos][data-aos][data-aos-duration="1350"], body[data-aos-duration="1350"] [data-aos] {
    transition-duration: 1.35s; }
  [data-aos][data-aos][data-aos-delay="1350"], body[data-aos-delay="1350"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1350"].aos-animate, body[data-aos-delay="1350"] [data-aos].aos-animate {
    transition-delay: 1.35s; }
  [data-aos][data-aos][data-aos-duration="1400"], body[data-aos-duration="1400"] [data-aos] {
    transition-duration: 1.4s; }
  [data-aos][data-aos][data-aos-delay="1400"], body[data-aos-delay="1400"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1400"].aos-animate, body[data-aos-delay="1400"] [data-aos].aos-animate {
    transition-delay: 1.4s; }
  [data-aos][data-aos][data-aos-duration="1450"], body[data-aos-duration="1450"] [data-aos] {
    transition-duration: 1.45s; }
  [data-aos][data-aos][data-aos-delay="1450"], body[data-aos-delay="1450"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1450"].aos-animate, body[data-aos-delay="1450"] [data-aos].aos-animate {
    transition-delay: 1.45s; }
  [data-aos][data-aos][data-aos-duration="1500"], body[data-aos-duration="1500"] [data-aos] {
    transition-duration: 1.5s; }
  [data-aos][data-aos][data-aos-delay="1500"], body[data-aos-delay="1500"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1500"].aos-animate, body[data-aos-delay="1500"] [data-aos].aos-animate {
    transition-delay: 1.5s; }
  [data-aos][data-aos][data-aos-duration="1550"], body[data-aos-duration="1550"] [data-aos] {
    transition-duration: 1.55s; }
  [data-aos][data-aos][data-aos-delay="1550"], body[data-aos-delay="1550"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1550"].aos-animate, body[data-aos-delay="1550"] [data-aos].aos-animate {
    transition-delay: 1.55s; }
  [data-aos][data-aos][data-aos-duration="1600"], body[data-aos-duration="1600"] [data-aos] {
    transition-duration: 1.6s; }
  [data-aos][data-aos][data-aos-delay="1600"], body[data-aos-delay="1600"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1600"].aos-animate, body[data-aos-delay="1600"] [data-aos].aos-animate {
    transition-delay: 1.6s; }
  [data-aos][data-aos][data-aos-duration="1650"], body[data-aos-duration="1650"] [data-aos] {
    transition-duration: 1.65s; }
  [data-aos][data-aos][data-aos-delay="1650"], body[data-aos-delay="1650"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1650"].aos-animate, body[data-aos-delay="1650"] [data-aos].aos-animate {
    transition-delay: 1.65s; }
  [data-aos][data-aos][data-aos-duration="1700"], body[data-aos-duration="1700"] [data-aos] {
    transition-duration: 1.7s; }
  [data-aos][data-aos][data-aos-delay="1700"], body[data-aos-delay="1700"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1700"].aos-animate, body[data-aos-delay="1700"] [data-aos].aos-animate {
    transition-delay: 1.7s; }
  [data-aos][data-aos][data-aos-duration="1750"], body[data-aos-duration="1750"] [data-aos] {
    transition-duration: 1.75s; }
  [data-aos][data-aos][data-aos-delay="1750"], body[data-aos-delay="1750"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1750"].aos-animate, body[data-aos-delay="1750"] [data-aos].aos-animate {
    transition-delay: 1.75s; }
  [data-aos][data-aos][data-aos-duration="1800"], body[data-aos-duration="1800"] [data-aos] {
    transition-duration: 1.8s; }
  [data-aos][data-aos][data-aos-delay="1800"], body[data-aos-delay="1800"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1800"].aos-animate, body[data-aos-delay="1800"] [data-aos].aos-animate {
    transition-delay: 1.8s; }
  [data-aos][data-aos][data-aos-duration="1850"], body[data-aos-duration="1850"] [data-aos] {
    transition-duration: 1.85s; }
  [data-aos][data-aos][data-aos-delay="1850"], body[data-aos-delay="1850"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1850"].aos-animate, body[data-aos-delay="1850"] [data-aos].aos-animate {
    transition-delay: 1.85s; }
  [data-aos][data-aos][data-aos-duration="1900"], body[data-aos-duration="1900"] [data-aos] {
    transition-duration: 1.9s; }
  [data-aos][data-aos][data-aos-delay="1900"], body[data-aos-delay="1900"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1900"].aos-animate, body[data-aos-delay="1900"] [data-aos].aos-animate {
    transition-delay: 1.9s; }
  [data-aos][data-aos][data-aos-duration="1950"], body[data-aos-duration="1950"] [data-aos] {
    transition-duration: 1.95s; }
  [data-aos][data-aos][data-aos-delay="1950"], body[data-aos-delay="1950"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="1950"].aos-animate, body[data-aos-delay="1950"] [data-aos].aos-animate {
    transition-delay: 1.95s; }
  [data-aos][data-aos][data-aos-duration="2000"], body[data-aos-duration="2000"] [data-aos] {
    transition-duration: 2s; }
  [data-aos][data-aos][data-aos-delay="2000"], body[data-aos-delay="2000"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2000"].aos-animate, body[data-aos-delay="2000"] [data-aos].aos-animate {
    transition-delay: 2s; }
  [data-aos][data-aos][data-aos-duration="2050"], body[data-aos-duration="2050"] [data-aos] {
    transition-duration: 2.05s; }
  [data-aos][data-aos][data-aos-delay="2050"], body[data-aos-delay="2050"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2050"].aos-animate, body[data-aos-delay="2050"] [data-aos].aos-animate {
    transition-delay: 2.05s; }
  [data-aos][data-aos][data-aos-duration="2100"], body[data-aos-duration="2100"] [data-aos] {
    transition-duration: 2.1s; }
  [data-aos][data-aos][data-aos-delay="2100"], body[data-aos-delay="2100"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2100"].aos-animate, body[data-aos-delay="2100"] [data-aos].aos-animate {
    transition-delay: 2.1s; }
  [data-aos][data-aos][data-aos-duration="2150"], body[data-aos-duration="2150"] [data-aos] {
    transition-duration: 2.15s; }
  [data-aos][data-aos][data-aos-delay="2150"], body[data-aos-delay="2150"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2150"].aos-animate, body[data-aos-delay="2150"] [data-aos].aos-animate {
    transition-delay: 2.15s; }
  [data-aos][data-aos][data-aos-duration="2200"], body[data-aos-duration="2200"] [data-aos] {
    transition-duration: 2.2s; }
  [data-aos][data-aos][data-aos-delay="2200"], body[data-aos-delay="2200"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2200"].aos-animate, body[data-aos-delay="2200"] [data-aos].aos-animate {
    transition-delay: 2.2s; }
  [data-aos][data-aos][data-aos-duration="2250"], body[data-aos-duration="2250"] [data-aos] {
    transition-duration: 2.25s; }
  [data-aos][data-aos][data-aos-delay="2250"], body[data-aos-delay="2250"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2250"].aos-animate, body[data-aos-delay="2250"] [data-aos].aos-animate {
    transition-delay: 2.25s; }
  [data-aos][data-aos][data-aos-duration="2300"], body[data-aos-duration="2300"] [data-aos] {
    transition-duration: 2.3s; }
  [data-aos][data-aos][data-aos-delay="2300"], body[data-aos-delay="2300"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2300"].aos-animate, body[data-aos-delay="2300"] [data-aos].aos-animate {
    transition-delay: 2.3s; }
  [data-aos][data-aos][data-aos-duration="2350"], body[data-aos-duration="2350"] [data-aos] {
    transition-duration: 2.35s; }
  [data-aos][data-aos][data-aos-delay="2350"], body[data-aos-delay="2350"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2350"].aos-animate, body[data-aos-delay="2350"] [data-aos].aos-animate {
    transition-delay: 2.35s; }
  [data-aos][data-aos][data-aos-duration="2400"], body[data-aos-duration="2400"] [data-aos] {
    transition-duration: 2.4s; }
  [data-aos][data-aos][data-aos-delay="2400"], body[data-aos-delay="2400"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2400"].aos-animate, body[data-aos-delay="2400"] [data-aos].aos-animate {
    transition-delay: 2.4s; }
  [data-aos][data-aos][data-aos-duration="2450"], body[data-aos-duration="2450"] [data-aos] {
    transition-duration: 2.45s; }
  [data-aos][data-aos][data-aos-delay="2450"], body[data-aos-delay="2450"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2450"].aos-animate, body[data-aos-delay="2450"] [data-aos].aos-animate {
    transition-delay: 2.45s; }
  [data-aos][data-aos][data-aos-duration="2500"], body[data-aos-duration="2500"] [data-aos] {
    transition-duration: 2.5s; }
  [data-aos][data-aos][data-aos-delay="2500"], body[data-aos-delay="2500"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2500"].aos-animate, body[data-aos-delay="2500"] [data-aos].aos-animate {
    transition-delay: 2.5s; }
  [data-aos][data-aos][data-aos-duration="2550"], body[data-aos-duration="2550"] [data-aos] {
    transition-duration: 2.55s; }
  [data-aos][data-aos][data-aos-delay="2550"], body[data-aos-delay="2550"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2550"].aos-animate, body[data-aos-delay="2550"] [data-aos].aos-animate {
    transition-delay: 2.55s; }
  [data-aos][data-aos][data-aos-duration="2600"], body[data-aos-duration="2600"] [data-aos] {
    transition-duration: 2.6s; }
  [data-aos][data-aos][data-aos-delay="2600"], body[data-aos-delay="2600"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2600"].aos-animate, body[data-aos-delay="2600"] [data-aos].aos-animate {
    transition-delay: 2.6s; }
  [data-aos][data-aos][data-aos-duration="2650"], body[data-aos-duration="2650"] [data-aos] {
    transition-duration: 2.65s; }
  [data-aos][data-aos][data-aos-delay="2650"], body[data-aos-delay="2650"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2650"].aos-animate, body[data-aos-delay="2650"] [data-aos].aos-animate {
    transition-delay: 2.65s; }
  [data-aos][data-aos][data-aos-duration="2700"], body[data-aos-duration="2700"] [data-aos] {
    transition-duration: 2.7s; }
  [data-aos][data-aos][data-aos-delay="2700"], body[data-aos-delay="2700"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2700"].aos-animate, body[data-aos-delay="2700"] [data-aos].aos-animate {
    transition-delay: 2.7s; }
  [data-aos][data-aos][data-aos-duration="2750"], body[data-aos-duration="2750"] [data-aos] {
    transition-duration: 2.75s; }
  [data-aos][data-aos][data-aos-delay="2750"], body[data-aos-delay="2750"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2750"].aos-animate, body[data-aos-delay="2750"] [data-aos].aos-animate {
    transition-delay: 2.75s; }
  [data-aos][data-aos][data-aos-duration="2800"], body[data-aos-duration="2800"] [data-aos] {
    transition-duration: 2.8s; }
  [data-aos][data-aos][data-aos-delay="2800"], body[data-aos-delay="2800"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2800"].aos-animate, body[data-aos-delay="2800"] [data-aos].aos-animate {
    transition-delay: 2.8s; }
  [data-aos][data-aos][data-aos-duration="2850"], body[data-aos-duration="2850"] [data-aos] {
    transition-duration: 2.85s; }
  [data-aos][data-aos][data-aos-delay="2850"], body[data-aos-delay="2850"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2850"].aos-animate, body[data-aos-delay="2850"] [data-aos].aos-animate {
    transition-delay: 2.85s; }
  [data-aos][data-aos][data-aos-duration="2900"], body[data-aos-duration="2900"] [data-aos] {
    transition-duration: 2.9s; }
  [data-aos][data-aos][data-aos-delay="2900"], body[data-aos-delay="2900"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2900"].aos-animate, body[data-aos-delay="2900"] [data-aos].aos-animate {
    transition-delay: 2.9s; }
  [data-aos][data-aos][data-aos-duration="2950"], body[data-aos-duration="2950"] [data-aos] {
    transition-duration: 2.95s; }
  [data-aos][data-aos][data-aos-delay="2950"], body[data-aos-delay="2950"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="2950"].aos-animate, body[data-aos-delay="2950"] [data-aos].aos-animate {
    transition-delay: 2.95s; }
  [data-aos][data-aos][data-aos-duration="3000"], body[data-aos-duration="3000"] [data-aos] {
    transition-duration: 3s; }
  [data-aos][data-aos][data-aos-delay="3000"], body[data-aos-delay="3000"] [data-aos] {
    transition-delay: 0s; }
  [data-aos][data-aos][data-aos-delay="3000"].aos-animate, body[data-aos-delay="3000"] [data-aos].aos-animate {
    transition-delay: 3s; }
  [data-aos] {
    pointer-events: none; }
  [data-aos].aos-animate {
    pointer-events: auto; }
  [data-aos][data-aos][data-aos-easing=linear], body[data-aos-easing=linear] [data-aos] {
    transition-timing-function: cubic-bezier(0.25, 0.25, 0.75, 0.75); }
  [data-aos][data-aos][data-aos-easing=ease], body[data-aos-easing=ease] [data-aos] {
    transition-timing-function: ease; }
  [data-aos][data-aos][data-aos-easing=ease-in], body[data-aos-easing=ease-in] [data-aos] {
    transition-timing-function: ease-in; }
  [data-aos][data-aos][data-aos-easing=ease-out], body[data-aos-easing=ease-out] [data-aos] {
    transition-timing-function: ease-out; }
  [data-aos][data-aos][data-aos-easing=ease-in-out], body[data-aos-easing=ease-in-out] [data-aos] {
    transition-timing-function: ease-in-out; }
  [data-aos][data-aos][data-aos-easing=ease-in-back], body[data-aos-easing=ease-in-back] [data-aos] {
    transition-timing-function: cubic-bezier(0.6, -0.28, 0.735, 0.045); }
  [data-aos][data-aos][data-aos-easing=ease-out-back], body[data-aos-easing=ease-out-back] [data-aos] {
    transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275); }
  [data-aos][data-aos][data-aos-easing=ease-in-out-back], body[data-aos-easing=ease-in-out-back] [data-aos] {
    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55); }
  [data-aos][data-aos][data-aos-easing=ease-in-sine], body[data-aos-easing=ease-in-sine] [data-aos] {
    transition-timing-function: cubic-bezier(0.47, 0, 0.745, 0.715); }
  [data-aos][data-aos][data-aos-easing=ease-out-sine], body[data-aos-easing=ease-out-sine] [data-aos] {
    transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1); }
  [data-aos][data-aos][data-aos-easing=ease-in-out-sine], body[data-aos-easing=ease-in-out-sine] [data-aos] {
    transition-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95); }
  [data-aos][data-aos][data-aos-easing=ease-in-quad], body[data-aos-easing=ease-in-quad] [data-aos] {
    transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53); }
  [data-aos][data-aos][data-aos-easing=ease-out-quad], body[data-aos-easing=ease-out-quad] [data-aos] {
    transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94); }
  [data-aos][data-aos][data-aos-easing=ease-in-out-quad], body[data-aos-easing=ease-in-out-quad] [data-aos] {
    transition-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955); }
  [data-aos][data-aos][data-aos-easing=ease-in-cubic], body[data-aos-easing=ease-in-cubic] [data-aos] {
    transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53); }
  [data-aos][data-aos][data-aos-easing=ease-out-cubic], body[data-aos-easing=ease-out-cubic] [data-aos] {
    transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94); }
  [data-aos][data-aos][data-aos-easing=ease-in-out-cubic], body[data-aos-easing=ease-in-out-cubic] [data-aos] {
    transition-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955); }
  [data-aos][data-aos][data-aos-easing=ease-in-quart], body[data-aos-easing=ease-in-quart] [data-aos] {
    transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53); }
  [data-aos][data-aos][data-aos-easing=ease-out-quart], body[data-aos-easing=ease-out-quart] [data-aos] {
    transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94); }
  [data-aos][data-aos][data-aos-easing=ease-in-out-quart], body[data-aos-easing=ease-in-out-quart] [data-aos] {
    transition-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955); } }

@media screen and (min-width: 992px) {
  html:not(.no-js) [data-aos^=fade][data-aos^=fade] {
    opacity: 0;
    transition-property: opacity,-webkit-transform;
    transition-property: opacity,transform;
    transition-property: opacity,transform,-webkit-transform; }
  html:not(.no-js) [data-aos^=fade][data-aos^=fade].aos-animate {
    opacity: 1;
    -webkit-transform: none;
    transform: none; }
  html:not(.no-js) [data-aos=fade-up] {
    -webkit-transform: translate3d(0, 100px, 0);
    transform: translate3d(0, 100px, 0); }
  html:not(.no-js) [data-aos=fade-down] {
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0); }
  html:not(.no-js) [data-aos=fade-right] {
    -webkit-transform: translate3d(-100px, 0, 0);
    transform: translate3d(-100px, 0, 0); }
  html:not(.no-js) [data-aos=fade-left] {
    -webkit-transform: translate3d(100px, 0, 0);
    transform: translate3d(100px, 0, 0); }
  html:not(.no-js) [data-aos=fade-up-right] {
    -webkit-transform: translate3d(-100px, 100px, 0);
    transform: translate3d(-100px, 100px, 0); }
  html:not(.no-js) [data-aos=fade-up-left] {
    -webkit-transform: translate3d(100px, 100px, 0);
    transform: translate3d(100px, 100px, 0); }
  html:not(.no-js) [data-aos=fade-down-right] {
    -webkit-transform: translate3d(-100px, -100px, 0);
    transform: translate3d(-100px, -100px, 0); }
  html:not(.no-js) [data-aos=fade-down-left] {
    -webkit-transform: translate3d(100px, -100px, 0);
    transform: translate3d(100px, -100px, 0); }
  html:not(.no-js) [data-aos^=zoom][data-aos^=zoom] {
    opacity: 0;
    transition-property: opacity,-webkit-transform;
    transition-property: opacity,transform;
    transition-property: opacity,transform,-webkit-transform; }
  html:not(.no-js) [data-aos^=zoom][data-aos^=zoom].aos-animate {
    opacity: 1;
    -webkit-transform: translateZ(0) scale(1);
    transform: translateZ(0) scale(1); }
  html:not(.no-js) [data-aos=zoom-in] {
    -webkit-transform: scale(0.6);
    transform: scale(0.6); }
  html:not(.no-js) [data-aos=zoom-in-up] {
    -webkit-transform: translate3d(0, 100px, 0) scale(0.6);
    transform: translate3d(0, 100px, 0) scale(0.6); }
  html:not(.no-js) [data-aos=zoom-in-down] {
    -webkit-transform: translate3d(0, -100px, 0) scale(0.6);
    transform: translate3d(0, -100px, 0) scale(0.6); }
  html:not(.no-js) [data-aos=zoom-in-right] {
    -webkit-transform: translate3d(-100px, 0, 0) scale(0.6);
    transform: translate3d(-100px, 0, 0) scale(0.6); }
  html:not(.no-js) [data-aos=zoom-in-left] {
    -webkit-transform: translate3d(100px, 0, 0) scale(0.6);
    transform: translate3d(100px, 0, 0) scale(0.6); }
  html:not(.no-js) [data-aos=zoom-out] {
    -webkit-transform: scale(1.2);
    transform: scale(1.2); }
  html:not(.no-js) [data-aos=zoom-out-up] {
    -webkit-transform: translate3d(0, 100px, 0) scale(1.2);
    transform: translate3d(0, 100px, 0) scale(1.2); }
  html:not(.no-js) [data-aos=zoom-out-down] {
    -webkit-transform: translate3d(0, -100px, 0) scale(1.2);
    transform: translate3d(0, -100px, 0) scale(1.2); }
  html:not(.no-js) [data-aos=zoom-out-right] {
    -webkit-transform: translate3d(-100px, 0, 0) scale(1.2);
    transform: translate3d(-100px, 0, 0) scale(1.2); }
  html:not(.no-js) [data-aos=zoom-out-left] {
    -webkit-transform: translate3d(100px, 0, 0) scale(1.2);
    transform: translate3d(100px, 0, 0) scale(1.2); }
  html:not(.no-js) [data-aos^=slide][data-aos^=slide] {
    transition-property: -webkit-transform;
    transition-property: transform;
    transition-property: transform,-webkit-transform;
    visibility: hidden; }
  html:not(.no-js) [data-aos^=slide][data-aos^=slide].aos-animate {
    visibility: visible;
    -webkit-transform: translateZ(0);
    transform: translateZ(0); }
  html:not(.no-js) [data-aos=slide-up] {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); }
  html:not(.no-js) [data-aos=slide-down] {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); }
  html:not(.no-js) [data-aos=slide-right] {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0); }
  html:not(.no-js) [data-aos=slide-left] {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0); }
  html:not(.no-js) [data-aos^=flip][data-aos^=flip] {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition-property: -webkit-transform;
    transition-property: transform;
    transition-property: transform,-webkit-transform; }
  html:not(.no-js) [data-aos=flip-left] {
    -webkit-transform: perspective(2500px) rotateY(-100deg);
    transform: perspective(2500px) rotateY(-100deg); }
  html:not(.no-js) [data-aos=flip-left].aos-animate {
    -webkit-transform: perspective(2500px) rotateY(0);
    transform: perspective(2500px) rotateY(0); }
  html:not(.no-js) [data-aos=flip-right] {
    -webkit-transform: perspective(2500px) rotateY(100deg);
    transform: perspective(2500px) rotateY(100deg); }
  html:not(.no-js) [data-aos=flip-right].aos-animate {
    -webkit-transform: perspective(2500px) rotateY(0);
    transform: perspective(2500px) rotateY(0); }
  html:not(.no-js) [data-aos=flip-up] {
    -webkit-transform: perspective(2500px) rotateX(-100deg);
    transform: perspective(2500px) rotateX(-100deg); }
  html:not(.no-js) [data-aos=flip-up].aos-animate {
    -webkit-transform: perspective(2500px) rotateX(0);
    transform: perspective(2500px) rotateX(0); }
  html:not(.no-js) [data-aos=flip-down] {
    -webkit-transform: perspective(2500px) rotateX(100deg);
    transform: perspective(2500px) rotateX(100deg); }
  html:not(.no-js) [data-aos=flip-down].aos-animate {
    -webkit-transform: perspective(2500px) rotateX(0);
    transform: perspective(2500px) rotateX(0); } }

/*# sourceMappingURL=bootstrap.css.map */

::placeholder {
  color: #393F48;
  font-family: "zona", sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 13px;
  line-height: 120%;
  text-transform: uppercase; }

div#scroll-bar {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  z-index: 100;
  background-color: #0E6BA8;
  max-width: 100%; }

::selection {
  background-color: #0E6BA8;
  color: #fff; }

html {
  scroll-behavior: smooth;
  font-size: 62.5%;
  line-height: 1.65;
  box-sizing: border-box; }

button:focus {
  outline: none; }

input.error {
  border-color: #ff7e7e !important; }

body {
  min-width: 320px;
  position: relative;
  font-style: normal;
  overflow-x: hidden;
  color: rgba(255, 255, 255, 0.44);
  font-size: 1.6rem;
  padding-right: 0 !important;
  background-color: #161D64; }
  body .nice-select {
    border: none;
    border-bottom: 1px solid #aeaeae;
    background-color: transparent;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 2rem;
    font-size: 1.8rem;
    padding: 1rem 0rem;
    outline: none;
    color: #fff;
    transition: .4s linear all; }
    body .nice-select:focus:required:invalid {
      border: 2px solid #ff7e7e; }
    body .nice-select:required:valid {
      border: 2px solid #70CD79; }
    body .nice-select:focus, body .nice-select:active {
      color: #fff; }
  body textarea {
    flex-grow: 2;
    resize: none; }

.fancybox-can-swipe .fancybox-content {
  color: #000; }

.nice-select .list {
  width: 100%; }

.img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
  object-fit: cover; }
  .img-responsive.img-width {
    width: 100%; }

a[href^=tel] {
  text-decoration: inherit;
  color: inherit !important; }

.abs {
  width: 100%;
  height: 100%;
  position: absolute;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 1;
  top: 0;
  left: 0;
  transition: .3s linear all; }
  .abs ~ * {
    position: relative;
    z-index: 2; }

section,
header,
footer {
  background-position: top center;
  background-repeat: no-repeat;
  background-size: cover;
  overflow: hidden !important;
  position: relative;
  background-attachment: fixed; }

.my-btn {
  padding: 0.7rem 4.4rem;
  color: #171616;
  background-color: #0E6BA8;
  text-transform: uppercase;
  transition: .4s linear all;
  font-size: 1.6rem;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  position: relative;
  border: solid 2px #0E6BA8;
  box-shadow: 0 8px 72px 1px rgba(228, 228, 12, 0.23);
  border-radius: 5px; }
  .my-btn.yl {
    background-color: transparent;
    color: #0E6BA8;
    box-shadow: 0 2px 15px 1px rgba(228, 228, 12, 0.23); }
    .my-btn.yl:hover, .my-btn.yl:focus {
      background-color: #0E6BA8;
      color: #171616; }
  .my-btn:hover, .my-btn:active {
    cursor: pointer !important;
    text-decoration: none;
    background-color: transparent;
    color: #0E6BA8; }

.bullet {
  padding-left: 0;
  margin-bottom: 4rem; }
  .bullet li {
    display: flex;
    align-items: center;
    position: relative; }
    .bullet li:not(:last-of-type) {
      margin-bottom: 1.5rem; }
    .bullet li p {
      margin-bottom: 0; }
  .bullet li::before {
    content: "";
    background-repeat: no-repeat;
    font-weight: bold;
    display: inline-block;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 0;
    width: 6px;
    height: 6px;
    background: black;
    border: 3px solid #fff;
    outline: 1px solid black;
    background-size: contain;
    box-sizing: content-box;
    margin-right: 15px;
    margin-left: -1rem;
    display: none; }
  .bullet li svg {
    color: #0E6BA8;
    width: 2rem; }

.navbar-collapse {
  display: none; }

a {
  color: rgba(255, 255, 255, 0.44);
  transition: .3s linear all; }
  a:hover {
    color: #0E6BA8;
    text-decoration: none; }

section:is(.mainBanner) {
  padding: 10rem 0; }

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  p,
  h1,
  h2,
  h3,
  h4,
  h5 {
    max-width: 100%; }
  section {
    background-attachment: inherit; }
  .swiper-wrapper {
    align-items: flex-start; }
  .swiper-slide {
    height: auto; } }

@supports not (-ms-high-contrast: none) {
  .cardsP .swiper-wrapper {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr;
    grid-template-columns: 1fr;
    -ms-grid-rows: auto auto auto;
    grid-template-rows: auto auto auto;
    grid-auto-flow: column;
    grid-column-gap: 0;
    grid-row-gap: 0; } }

header {
  width: 100%;
  padding: 30px 0 17px;
  background-color: transparent;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100; }
  header:after {
    content: '';
    left: 50%;
    transform: translate3d(-50%, 0, 0);
    display: block;
    width: 1840px;
    max-width: 100%;
    height: 1px;
    background-color: rgba(255, 255, 255, 0.15);
    position: absolute;
    bottom: 0; }
  header .logo .svg {
    width: 100%;
    max-width: 156px;
    height: auto;
    min-height: 26px;
    margin-left: 20px; }
  header p {
    font-family: "zona", sans-serif;
    font-size: 10px;
    line-height: 12px;
    color: rgba(255, 255, 255, 0.44);
    text-align: right;
    margin: 0;
    margin-right: 20px; }

.banner {
  width: 100%;
  padding: 306px 0 218px; }
  .banner .banner-info p {
    font-family: "zona", sans-serif;
    font-size: 15px;
    line-height: 140%;
    letter-spacing: -0.01em;
    color: #8C929F;
    margin-bottom: 35px;
    max-width: 200px;
    display: inline-block;
    font-weight: 800; }
    .banner .banner-info p span {
      display: block; }
  .banner .banner-info h1 {
    font-family: "zona", sans-serif;
    font-size: 52px;
    font-weight: 700;
    line-height: 104%;
    letter-spacing: -0.02em;
    color: #FFFFFF; }
    .banner .banner-info h1 span {
      color: #8df9ff; }
  .banner form {
    padding: 96px 48px 37px;
    width: 100%;
    border-radius: 6px;
    background-color: #fff;
    position: relative; }
    .banner form .form-guide-box {
      position: absolute;
      top: -79px;
      width: 100%;
      left: 0; }
      .banner form .form-guide-box p {
        font-family: "zona", sans-serif;
        font-style: normal;
        font-weight: bold;
        font-size: 15px;
        color: #FFFFFF;
        margin-right: 0;
        margin-left: 41%;
        margin-top: -6px;
        margin-bottom: 16px; }
      .banner form .form-guide-box .form-guide {
        width: 100%;
        height: auto;
        max-height: 87px;
        position: relative;
        display: flex;
        margin: 0 auto;
        align-items: center;
        max-width: 280px;
        background: linear-gradient(115.47deg, #5B64C2 22.82%, #333B8F 102.61%);
        box-shadow: 0px 8.72274px 17.4455px rgba(55, 64, 149, 0.33);
        border-radius: 3.64533px; }
        .banner form .form-guide-box .form-guide img {
          top: -20px;
          position: relative;
          margin-right: 23px;
          margin-left: 7px; }
        .banner form .form-guide-box .form-guide h3 {
          font-family: "zona", sans-serif;
          font-style: normal;
          font-weight: 900;
          font-size: 13.0841px;
          line-height: 150%;
          text-align: center;
          letter-spacing: 0.5em;
          color: #FFFFFF;
          margin: 0 28px 0 0; }
        .banner form .form-guide-box .form-guide .lock {
          width: 38px;
          height: 38px;
          position: relative;
          box-sizing: border-box;
          border-radius: 50%;
          background: linear-gradient(95.09deg, #5A62B8 0%, #333B8F 97.97%);
          border: 1px solid #fff;
          display: flex;
          align-items: center;
          justify-content: center; }
          .banner form .form-guide-box .form-guide .lock img {
            margin: 0;
            top: 0; }
    .banner form h4 {
      font-family: "zona", sans-serif;
      font-style: normal;
      font-weight: bold;
      font-size: 24px;
      letter-spacing: -0.01em;
      color: #393F48;
      margin: 0;
      line-height: 110%; }
    .banner form input {
      background: #E0EDED;
      border-radius: 3px;
      border: 2px solid transparent;
      padding: 20px;
      outline: none;
      width: 100%;
      margin-bottom: 16px;
      font-family: "zona", sans-serif;
      font-style: normal;
      font-weight: bold;
      font-size: 13px;
      line-height: 120%; }
    .banner form .form-agree {
      width: 100%;
      text-align: center;
      margin-top: 46px; }
      .banner form .form-agree p {
        font-family: "zona", sans-serif;
        font-style: normal;
        font-weight: bold;
        font-size: 8px;
        line-height: 160%;
        color: #A1AFAF;
        margin-bottom: 0;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 0;
        display: block;
        margin-bottom: -6px; }
      .banner form .form-agree a {
        font-family: "zona", sans-serif;
        font-style: normal;
        font-weight: bold;
        font-size: 8px;
        color: #0069FA;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        line-height: .5;
        box-sizing: border-box;
        display: inline-block; }

.form-time {
  width: auto;
  height: auto;
  position: relative;
  display: flex;
  align-items: center;
  margin: 25px 0 30px 0; }
  .form-time p {
    padding: 5px 10px;
    border: 1px solid #0069FA;
    box-sizing: border-box;
    border-radius: 3px;
    color: #000;
    margin: 0 9px 0 0 !important;
    font-family: "zona", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 15px;
    line-height: 120%;
    color: #0069FA !important; }

.form-btn {
  margin: 0;
  width: 100%;
  height: auto;
  min-height: 60px;
  position: relative;
  display: block;
  background-color: #fff;
  font-size: 15px;
  border-radius: 3px;
  cursor: pointer;
  color: #fff;
  text-transform: uppercase;
  display: flex;
  align-items: center;
  background-color: #0069FA;
  justify-content: center;
  border: none;
  outline: none;
  transition: all .2s ease-in-out;
  font-weight: 700;
  font-family: "zona", sans-serif; }
  .form-btn:hover {
    background: #20A1FF;
		transition: all .2s ease-in-out; }
		
/*! test  */
@media screen and (max-width: 992px) {
  .banner .banner-info {
    padding-left: 15px; }
  .banner .banner-info p {
    max-width: 180px;
    margin-bottom: 40px; }
  .banner .banner-info p span {
    display: inline; }
  header {
    padding: 17px 0 10px; }
  header .logo .svg {
    margin-left: 12px; }
  header:after {
    max-width: 320px; }
header p {
    display: none; }
  .banner {
    padding: 83px 0 66px 0;
    height: auto;
    background-attachment: unset;
    background-position: 38% -16%;
    background-color: #000;
    background-size: 326%;
    background-color: #000; }
    .banner:before {
      content: '';
      left: 0;
      top: 0;
      position: absolute;
      display: block;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4); }
    .banner .banner-info {
      margin-bottom: 140px;
      max-width: 300px; }
      .banner .banner-info p {
        font-weight: 700;
        font-size: 13px;
        line-height: 130%; }
      .banner .banner-info h1 {
        font-size: 40px;
        font-weight: 700;
        max-width: 245px;
        line-height: 1.05; }
    .banner form {
      padding: 96px 35px 25px;
      margin-top: 10px; }
      .banner form .form-time {
        margin: 16px 0 22px; }
      .banner form .form-guide-box {
        position: absolute;
        top: -19%;
        width: 100%;
        left: 0; }
        .banner form .form-guide-box p {
          font-family: "zona";
          font-style: normal;
          font-weight: bold;
          font-size: 15px;
          color: #FFFFFF;
          margin: 0;
          max-width: 220px;
          padding: 0 15px;
          margin-top: -26px;
          margin-bottom: 83px; }
        .banner form .form-guide-box .form-guide {
          max-width: 280px;
          top: -35px; }
          .banner form .form-guide-box .form-guide img {
            top: -20px;
            position: relative;
            margin-right: 24px;
            margin-left: 6px; }
          .banner form .form-guide-box .form-guide h3 {
            font-family: "zona";
            font-style: normal;
            font-weight: 900;
            font-size: 13.0841px;
            line-height: 150%;
            text-align: center;
            letter-spacing: 0.5em;
            color: #FFFFFF;
            margin: 0 25px 0 0;
            margin-right: 28px; }
          .banner form .form-guide-box .form-guide .lock {
            width: 38px;
            height: 38px;
            position: relative;
            box-sizing: border-box;
            border-radius: 50%;
            background: linear-gradient(95.09deg, #5A62B8 0%, #333B8F 97.97%);
            border: 1px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center; }
            .banner form .form-guide-box .form-guide .lock img {
              margin: 0;
              top: 0; }
      .banner form h4 {
        font-family: "zona";
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        letter-spacing: -0.01em;
        color: #393F48;
        margin: 0;
        line-height: 110%;
        max-width: 200px; }
      .banner form input {
        background: #E0EDED;
        border-radius: 3px;
        padding: 16px 14px;
        outline: none;
        width: 100%;
        margin-bottom: 15px;
        font-family: "zona";
        font-style: normal;
        font-weight: bold;
        font-size: 13px;
        line-height: 120%; }
      .banner form .form-btn {
        min-height: 50px; }
      .banner form .form-agree {
        width: 100%;
        height: auto;
        text-align: center;
        margin-top: 24px; }
        .banner form .form-agree p {
          font-family: "zona";
          font-style: normal;
          font-weight: bold;
          font-size: 8px;
          line-height: 160%;
          color: #A1AFAF;
          margin-bottom: -8px; }
        .banner form .form-agree a {
          font-family: "zona";
          font-style: normal;
          font-weight: bold;
          font-size: 8px;
          line-height: 160%;
          color: #0069FA; }
  .form-time {
    width: auto;
    height: auto;
    position: relative;
    display: flex;
    align-items: center;
    margin: 25px 0 30px 0; }
    .form-time p {
      font-size: 13px; }
		}
</style>