<?php
    use App\Models\User;
    use App\Models\Publication;

    use Illuminate\Support\Facades\Route;
    use App\Models\Soutienpostv;
    use App\Models\Soutienpostevent;

    $video=soutienpostv::all();
    $event=soutienpostevent::all();
    $photo = DB::table('photo_profils')->where('user_id', '{{ Auth::user()->id}}');

    ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from social.webestica.com/my-profile-videos.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 10:36:08 GMT -->
<head>
	<title>Aras-Soutien-Video</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap 5 based Social Media Network and Community Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="../fonts.googleapis.com/index.html">
  <link rel="stylesheet" href="../fonts.googleapis.com/css2ab8c.css?family=Inter:wght@300;400;500;600;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox-master/dist/css/glightbox.min.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
<style>
    @charset "UTF-8";
/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-white: #fff;
  --bs-gray: #6c757d;
  --bs-gray-dark: #343a40;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: #0f6fec;
  --bs-secondary: #c5c6cc;
  --bs-success: #0cbc87;
  --bs-info: #4f9ef8;
  --bs-warning: #f7c32e;
  --bs-danger: #d6293e;
  --bs-light: #202227;
  --bs-dark: #0f0f10;
  --bs-primary-rgb: 15, 111, 236;
  --bs-secondary-rgb: 197, 198, 204;
  --bs-success-rgb: 12, 188, 135;
  --bs-info-rgb: 79, 158, 248;
  --bs-warning-rgb: 247, 195, 46;
  --bs-danger-rgb: 214, 41, 62;
  --bs-light-rgb: 32, 34, 39;
  --bs-dark-rgb: 15, 15, 16;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 161, 161, 168;
  --bs-body-bg-rgb: 25, 26, 31;
  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: Inter, sans-serif;
  --bs-body-font-size: 0.9375rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #a1a1a8;
  --bs-body-bg: #191a1f;
}

.alert {
  padding: 15px;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: .25rem;
}

.alert > p,
.alert > ul {
  margin-bottom: 0;
}

.alert > p + p {
  margin-top: 5px;
}

.alert-heading {
  margin-top: 0;
  color: inherit;
}

.alert-link {
  font-weight: bold;
}

.alert-dismissible {
  padding-right: 35px;
}

.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}

.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d0e9c6;
}

.alert-success hr {
  border-top-color: #c1e2b3;
}

.alert-success .alert-link {
  color: #2b542c;
}

.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bcdff1;
}

.alert-info hr {
  border-top-color: #a6d5ec;
}

.alert-info .alert-link {
  color: #245269;
}

.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faf2cc;
}

.alert-warning hr {
  border-top-color: #f7ecb5;
}

.alert-warning .alert-link {
  color: #66512c;
}

.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebcccc;
}

.alert-danger hr {
  border-top-color: #e4b9b9;
}

.alert-danger .alert-link {
  color: #843534;
}
*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 1rem 0;
  color: #30343c;
  background-color: currentColor;
  border: 0;
  opacity: 0.6;
}

hr:not([size]) {
  height: 1px;
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-family: "Inter", sans-serif;
  font-weight: 700;
  line-height: 1.25;
  color: #fff;
}

h1, .h1 {
  font-size: calc(1.359375rem + 1.3125vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.34375rem;
  }
}

h2, .h2 {
  font-size: calc(1.3125rem + 0.75vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 1.875rem;
  }
}

h3, .h3 {
  font-size: calc(1.2890625rem + 0.46875vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.640625rem;
  }
}

h4, .h4 {
  font-size: calc(1.265625rem + 0.1875vw);
}
@media (min-width: 1200px) {
  h4, .h4 {
    font-size: 1.40625rem;
  }
}

h5, .h5 {
  font-size: 1.171875rem;
}

h6, .h6 {
  font-size: 0.9375rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-bs-original-title] {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
          text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small, .small {
  font-size: 0.875em;
}

mark, .mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: #0f6fec;
  text-decoration: none;
}
a:hover {
  color: #0c59bd;
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  direction: ltr /* rtl:ignore */;
  unicode-bidi: bidi-override;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 0.875em;
  color: #d63384;
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 0.875em;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
  font-weight: 700;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #6c757d;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]::-webkit-calendar-picker-indicator {
  display: none;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::-webkit-file-upload-button {
  font: inherit;
}

::file-selector-button {
  font: inherit;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.171875rem;
  font-weight: 400;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 700;
  line-height: 1.25;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 700;
  line-height: 1.25;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 700;
  line-height: 1.25;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 700;
  line-height: 1.25;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 700;
  line-height: 1.25;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 700;
  line-height: 1.25;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #6c757d;
}
.blockquote-footer::before {
  content: "— ";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 0.875em;
  color: #6c757d;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 96%;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 100%;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 100%;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1200px;
  }
}
.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  -ms-flex-negative: 0;
      flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}

.col {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 0%;
          flex: 1 0 0%;
}

.row-cols-auto > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 33.3333333333%;
}

.row-cols-4 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 16.6666666667%;
}

.col-auto {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
}

.col-1 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 8.33333333%;
}

.col-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 16.66666667%;
}

.col-3 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 33.33333333%;
}

.col-5 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 41.66666667%;
}

.col-6 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 58.33333333%;
}

.col-8 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 66.66666667%;
}

.col-9 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 83.33333333%;
}

.col-11 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 91.66666667%;
}

.col-12 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-sm-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-sm-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-sm-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-sm-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-sm-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-sm-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-sm-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-sm-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-sm-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-sm-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-sm-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-sm-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-sm-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-sm-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-sm-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-sm-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-sm-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-sm-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-sm-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-sm-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-sm-0 {
    margin-left: 0;
  }

  .offset-sm-1 {
    margin-left: 8.33333333%;
  }

  .offset-sm-2 {
    margin-left: 16.66666667%;
  }

  .offset-sm-3 {
    margin-left: 25%;
  }

  .offset-sm-4 {
    margin-left: 33.33333333%;
  }

  .offset-sm-5 {
    margin-left: 41.66666667%;
  }

  .offset-sm-6 {
    margin-left: 50%;
  }

  .offset-sm-7 {
    margin-left: 58.33333333%;
  }

  .offset-sm-8 {
    margin-left: 66.66666667%;
  }

  .offset-sm-9 {
    margin-left: 75%;
  }

  .offset-sm-10 {
    margin-left: 83.33333333%;
  }

  .offset-sm-11 {
    margin-left: 91.66666667%;
  }

  .g-sm-0,
.gx-sm-0 {
    --bs-gutter-x: 0;
  }

  .g-sm-0,
.gy-sm-0 {
    --bs-gutter-y: 0;
  }

  .g-sm-1,
.gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-sm-1,
.gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-sm-2,
.gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-sm-2,
.gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-sm-3,
.gx-sm-3 {
    --bs-gutter-x: 1rem;
  }

  .g-sm-3,
.gy-sm-3 {
    --bs-gutter-y: 1rem;
  }

  .g-sm-4,
.gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-sm-4,
.gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-sm-5,
.gx-sm-5 {
    --bs-gutter-x: 3rem;
  }

  .g-sm-5,
.gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-md-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-md-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-md-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-md-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-md-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-md-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-md-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-md-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-md-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-md-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-md-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-md-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-md-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-md-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-md-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-md-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-md-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-md-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-md-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-md-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-md-0 {
    margin-left: 0;
  }

  .offset-md-1 {
    margin-left: 8.33333333%;
  }

  .offset-md-2 {
    margin-left: 16.66666667%;
  }

  .offset-md-3 {
    margin-left: 25%;
  }

  .offset-md-4 {
    margin-left: 33.33333333%;
  }

  .offset-md-5 {
    margin-left: 41.66666667%;
  }

  .offset-md-6 {
    margin-left: 50%;
  }

  .offset-md-7 {
    margin-left: 58.33333333%;
  }

  .offset-md-8 {
    margin-left: 66.66666667%;
  }

  .offset-md-9 {
    margin-left: 75%;
  }

  .offset-md-10 {
    margin-left: 83.33333333%;
  }

  .offset-md-11 {
    margin-left: 91.66666667%;
  }

  .g-md-0,
.gx-md-0 {
    --bs-gutter-x: 0;
  }

  .g-md-0,
.gy-md-0 {
    --bs-gutter-y: 0;
  }

  .g-md-1,
.gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-md-1,
.gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-md-2,
.gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-md-2,
.gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-md-3,
.gx-md-3 {
    --bs-gutter-x: 1rem;
  }

  .g-md-3,
.gy-md-3 {
    --bs-gutter-y: 1rem;
  }

  .g-md-4,
.gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-md-4,
.gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-md-5,
.gx-md-5 {
    --bs-gutter-x: 3rem;
  }

  .g-md-5,
.gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-lg-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-lg-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-lg-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-lg-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-lg-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-lg-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-lg-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-lg-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-lg-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-lg-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-lg-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-lg-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-lg-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-lg-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-lg-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-lg-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-lg-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-lg-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-lg-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-lg-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-lg-0 {
    margin-left: 0;
  }

  .offset-lg-1 {
    margin-left: 8.33333333%;
  }

  .offset-lg-2 {
    margin-left: 16.66666667%;
  }

  .offset-lg-3 {
    margin-left: 25%;
  }

  .offset-lg-4 {
    margin-left: 33.33333333%;
  }

  .offset-lg-5 {
    margin-left: 41.66666667%;
  }

  .offset-lg-6 {
    margin-left: 50%;
  }

  .offset-lg-7 {
    margin-left: 58.33333333%;
  }

  .offset-lg-8 {
    margin-left: 66.66666667%;
  }

  .offset-lg-9 {
    margin-left: 75%;
  }

  .offset-lg-10 {
    margin-left: 83.33333333%;
  }

  .offset-lg-11 {
    margin-left: 91.66666667%;
  }

  .g-lg-0,
.gx-lg-0 {
    --bs-gutter-x: 0;
  }

  .g-lg-0,
.gy-lg-0 {
    --bs-gutter-y: 0;
  }

  .g-lg-1,
.gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-lg-1,
.gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-lg-2,
.gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-lg-2,
.gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-lg-3,
.gx-lg-3 {
    --bs-gutter-x: 1rem;
  }

  .g-lg-3,
.gy-lg-3 {
    --bs-gutter-y: 1rem;
  }

  .g-lg-4,
.gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-lg-4,
.gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-lg-5,
.gx-lg-5 {
    --bs-gutter-x: 3rem;
  }

  .g-lg-5,
.gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-xl-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-xl-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-xl-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-xl-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-xl-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-xl-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-xl-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-xl-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-xl-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-xl-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-xl-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-xl-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-xl-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-xl-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-xl-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-xl-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-xl-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-xl-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-xl-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-xl-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-xl-0 {
    margin-left: 0;
  }

  .offset-xl-1 {
    margin-left: 8.33333333%;
  }

  .offset-xl-2 {
    margin-left: 16.66666667%;
  }

  .offset-xl-3 {
    margin-left: 25%;
  }

  .offset-xl-4 {
    margin-left: 33.33333333%;
  }

  .offset-xl-5 {
    margin-left: 41.66666667%;
  }

  .offset-xl-6 {
    margin-left: 50%;
  }

  .offset-xl-7 {
    margin-left: 58.33333333%;
  }

  .offset-xl-8 {
    margin-left: 66.66666667%;
  }

  .offset-xl-9 {
    margin-left: 75%;
  }

  .offset-xl-10 {
    margin-left: 83.33333333%;
  }

  .offset-xl-11 {
    margin-left: 91.66666667%;
  }

  .g-xl-0,
.gx-xl-0 {
    --bs-gutter-x: 0;
  }

  .g-xl-0,
.gy-xl-0 {
    --bs-gutter-y: 0;
  }

  .g-xl-1,
.gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-xl-1,
.gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-xl-2,
.gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-xl-2,
.gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-xl-3,
.gx-xl-3 {
    --bs-gutter-x: 1rem;
  }

  .g-xl-3,
.gy-xl-3 {
    --bs-gutter-y: 1rem;
  }

  .g-xl-4,
.gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-xl-4,
.gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-xl-5,
.gx-xl-5 {
    --bs-gutter-x: 3rem;
  }

  .g-xl-5,
.gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-xxl-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-xxl-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-xxl-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-xxl-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-xxl-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-xxl-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-xxl-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-xxl-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-xxl-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-xxl-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-xxl-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-xxl-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-xxl-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-xxl-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-xxl-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-xxl-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-xxl-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-xxl-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-xxl-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-xxl-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-xxl-0 {
    margin-left: 0;
  }

  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }

  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }

  .offset-xxl-3 {
    margin-left: 25%;
  }

  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }

  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }

  .offset-xxl-6 {
    margin-left: 50%;
  }

  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }

  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }

  .offset-xxl-9 {
    margin-left: 75%;
  }

  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }

  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }

  .g-xxl-0,
.gx-xxl-0 {
    --bs-gutter-x: 0;
  }

  .g-xxl-0,
.gy-xxl-0 {
    --bs-gutter-y: 0;
  }

  .g-xxl-1,
.gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-xxl-1,
.gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-xxl-2,
.gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-xxl-2,
.gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-xxl-3,
.gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }

  .g-xxl-3,
.gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }

  .g-xxl-4,
.gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-xxl-4,
.gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-xxl-5,
.gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }

  .g-xxl-5,
.gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}
.table {
  --bs-table-bg: transparent;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #a1a1a8;
  --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
  --bs-table-active-color: #a1a1a8;
  --bs-table-active-bg: rgba(0, 0, 0, 0.1);
  --bs-table-hover-color: #a1a1a8;
  --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
  width: 100%;
  margin-bottom: 1rem;
  color: #a1a1a8;
  vertical-align: top;
  border-color: rgba(255, 255, 255, 0.1);
}
.table > :not(caption) > * > * {
  padding: 0.5rem 0.5rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  -webkit-box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
          box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}
.table > :not(:first-child) {
  border-top: 2px solid #464950;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.25rem 0.25rem;
}

.table-bordered > :not(caption) > * {
  border-width: 1px 0;
}
.table-bordered > :not(caption) > * > * {
  border-width: 0 1px;
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}

.table-primary {
  --bs-table-bg: #cfe2ff;
  --bs-table-striped-bg: #c5d7f2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bacbe6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfd1ec;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bacbe6;
}

.table-secondary {
  --bs-table-bg: #e2e3e5;
  --bs-table-striped-bg: #d7d8da;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cbccce;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d1d2d4;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cbccce;
}

.table-success {
  --bs-table-bg: #d1e7dd;
  --bs-table-striped-bg: #c7dbd2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bcd0c7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c1d6cc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bcd0c7;
}

.table-info {
  --bs-table-bg: #cff4fc;
  --bs-table-striped-bg: #c5e8ef;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #badce3;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfe2e9;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #badce3;
}

.table-warning {
  --bs-table-bg: #fff3cd;
  --bs-table-striped-bg: #f2e7c3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6dbb9;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ece1be;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e6dbb9;
}

.table-danger {
  --bs-table-bg: #f8d7da;
  --bs-table-striped-bg: #eccccf;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfc2c4;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5c7ca;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfc2c4;
}

.table-light {
  --bs-table-bg: #f8f9fa;
  --bs-table-striped-bg: #ecedee;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfe0e1;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5e6e7;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfe0e1;
}

.table-dark {
  --bs-table-bg: #212529;
  --bs-table-striped-bg: #2c3034;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #373b3e;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #323539;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #373b3e;
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 0.5rem;
}

.col-form-label {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.8rem + 1px);
  padding-bottom: calc(0.8rem + 1px);
  font-size: 1rem;
}

.col-form-label-sm {
  padding-top: calc(0.4rem + 1px);
  padding-bottom: calc(0.4rem + 1px);
  font-size: 0.8125rem;
}

.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #6c757d;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 1rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #c5c6cc;
  background-color: #191a1f;
  background-clip: padding-box;
  border: 1px solid #30343c;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border-radius: 0.4rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    -webkit-transition: none;
    transition: none;
  }
}
.form-control[type=file] {
  overflow: hidden;
}
.form-control[type=file]:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus {
  color: #c5c6cc;
  background-color: #191a1f;
  border-color: #0f6fec;
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.form-control::-webkit-date-and-time-value {
  height: 1.5em;
}
.form-control::-webkit-input-placeholder {
  color: #a1a1a8;
  opacity: 1;
}
.form-control::-moz-placeholder {
  color: #a1a1a8;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #a1a1a8;
  opacity: 1;
}
.form-control::-ms-input-placeholder {
  color: #a1a1a8;
  opacity: 1;
}
.form-control::placeholder {
  color: #a1a1a8;
  opacity: 1;
}
.form-control:disabled, .form-control[readonly] {
  background-color: #202227;
  border-color: #30343c;
  opacity: 1;
}
.form-control::-webkit-file-upload-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.form-control::file-selector-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button {
    -webkit-transition: none;
    transition: none;
  }
  .form-control::file-selector-button {
    -webkit-transition: none;
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: #dde0e3;
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #dde0e3;
}
.form-control::-webkit-file-upload-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button {
    -webkit-transition: none;
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: #dde0e3;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.5rem 0;
  margin-bottom: 0;
  line-height: 1.5;
  color: #a1a1a8;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: calc(1.25em + 0.8rem + 2px);
  padding: 0.4rem 0.8rem;
  font-size: 0.8125rem;
  border-radius: 0.2rem;
}
.form-control-sm::-webkit-file-upload-button {
  padding: 0.4rem 0.8rem;
  margin: -0.4rem -0.8rem;
  -webkit-margin-end: 0.8rem;
          margin-inline-end: 0.8rem;
}
.form-control-sm::file-selector-button {
  padding: 0.4rem 0.8rem;
  margin: -0.4rem -0.8rem;
  -webkit-margin-end: 0.8rem;
          margin-inline-end: 0.8rem;
}
.form-control-sm::-webkit-file-upload-button {
  padding: 0.4rem 0.8rem;
  margin: -0.4rem -0.8rem;
  -webkit-margin-end: 0.8rem;
          margin-inline-end: 0.8rem;
}

.form-control-lg {
  min-height: calc(1.25em + 1.6rem + 2px);
  padding: 0.8rem 1.5rem;
  font-size: 1rem;
  border-radius: 0.2rem;
}
.form-control-lg::-webkit-file-upload-button {
  padding: 0.8rem 1.5rem;
  margin: -0.8rem -1.5rem;
  -webkit-margin-end: 1.5rem;
          margin-inline-end: 1.5rem;
}
.form-control-lg::file-selector-button {
  padding: 0.8rem 1.5rem;
  margin: -0.8rem -1.5rem;
  -webkit-margin-end: 1.5rem;
          margin-inline-end: 1.5rem;
}
.form-control-lg::-webkit-file-upload-button {
  padding: 0.8rem 1.5rem;
  margin: -0.8rem -1.5rem;
  -webkit-margin-end: 1.5rem;
          margin-inline-end: 1.5rem;
}

textarea.form-control {
  min-height: calc(1.5em + 1rem + 2px);
}
textarea.form-control-sm {
  min-height: calc(1.25em + 0.8rem + 2px);
}
textarea.form-control-lg {
  min-height: calc(1.25em + 1.6rem + 2px);
}

.form-control-color {
  width: 3rem;
  height: auto;
  padding: 0.5rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  height: 1.5em;
  border-radius: 0.4rem;
}
.form-control-color::-webkit-color-swatch {
  height: 1.5em;
  border-radius: 0.4rem;
}

.form-select {
  display: block;
  width: 100%;
  padding: 0.5rem 2.25rem 0.5rem 1rem;
  -moz-padding-start: calc(1rem - 3px);
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #c5c6cc;
  background-color: #191a1f;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 1px solid #30343c;
  border-radius: 0.4rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    -webkit-transition: none;
    transition: none;
  }
}
.form-select:focus {
  border-color: #0f6fec;
  outline: 0;
  -webkit-box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.25);
          box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.25);
}
.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 1rem;
  background-image: none;
}
.form-select:disabled {
  color: #464950;
  background-color: #202227;
  border-color: #30343c;
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #c5c6cc;
}

.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.form-check {
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5em;
  margin-bottom: 0.125rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.5em;
}

.form-check-input {
  width: 1em;
  height: 1em;
  margin-top: 0.25em;
  vertical-align: top;
  background-color: #a1a1a8;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-print-color-adjust: exact;
          color-adjust: exact;
}
.form-check-input[type=checkbox] {
  border-radius: 0.25em;
}
.form-check-input[type=radio] {
  border-radius: 50%;
}
.form-check-input:active {
  -webkit-filter: brightness(90%);
          filter: brightness(90%);
}
.form-check-input:focus {
  border-color: #0f6fec;
  outline: 0;
  -webkit-box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.25);
          box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.25);
}
.form-check-input:checked {
  background-color: #0f6fec;
  border-color: #0f6fec;
}
.form-check-input:checked[type=checkbox] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #0f6fec;
  border-color: #0f6fec;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  -webkit-filter: none;
          filter: none;
  opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  opacity: 0.5;
}

.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  width: 2em;
  margin-left: -2.5em;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  background-position: left center;
  border-radius: 2em;
  -webkit-transition: background-position 0.15s ease-in-out;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    -webkit-transition: none;
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%230f6fec'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check[disabled] + .btn, .btn-check:disabled + .btn {
  pointer-events: none;
  -webkit-filter: none;
          filter: none;
  opacity: 0.65;
}

.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  -webkit-box-shadow: 0 0 0 1px #eff2f6, none;
          box-shadow: 0 0 0 1px #eff2f6, none;
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #eff2f6, none;
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #0f6fec;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #b7d4f9;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #a1a1a8;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #0f6fec;
  border: 0;
  border-radius: 1rem;
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
       appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #b7d4f9;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #a1a1a8;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: #464950;
}
.form-range:disabled::-moz-range-thumb {
  background-color: #464950;
}

.form-floating {
  position: relative;
}
.form-floating > .form-control,
.form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  padding: 1rem 0.75rem;
  pointer-events: none;
  border: 1px solid transparent;
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  -webkit-transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
  transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    -webkit-transition: none;
    transition: none;
  }
}
.form-floating > .form-control {
  padding: 1rem 0.75rem;
}
.form-floating > .form-control::-webkit-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::-moz-placeholder {
  color: transparent;
}
.form-floating > .form-control:-ms-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::-ms-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::placeholder {
  color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-ms-input-placeholder) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:not(:-ms-input-placeholder) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
  opacity: 0.65;
  -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
          transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label {
  opacity: 0.65;
  -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
          transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-select {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .form-select:focus {
  z-index: 3;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 3;
}

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0.375rem 0.75rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #c5c6cc;
  text-align: center;
  white-space: nowrap;
  background-color: #30343c;
  border: 1px solid #30343c;
  border-radius: 0.4rem;
}

.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
  padding: 0.8rem 1.5rem;
  font-size: 1rem;
  border-radius: 0.2rem;
}

.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
  padding: 0.4rem 0.8rem;
  font-size: 0.8125rem;
  border-radius: 0.2rem;
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 3.25rem;
}

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n+4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #198754;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(25, 135, 84, 0.9);
  border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #198754;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #198754;
  -webkit-box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #198754;
}
.was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: #198754;
  -webkit-box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
}

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: #198754;
}
.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: #198754;
}
.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  -webkit-box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #198754;
}

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group .form-control:valid, .input-group .form-control.is-valid,
.was-validated .input-group .form-select:valid,
.input-group .form-select.is-valid {
  z-index: 1;
}
.was-validated .input-group .form-control:valid:focus, .input-group .form-control.is-valid:focus,
.was-validated .input-group .form-select:valid:focus,
.input-group .form-select.is-valid:focus {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #dc3545;
  -webkit-box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
          box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #dc3545;
}
.was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: #dc3545;
  -webkit-box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
          box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: #dc3545;
}
.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: #dc3545;
}
.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  -webkit-box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
          box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group .form-control:invalid, .input-group .form-control.is-invalid,
.was-validated .input-group .form-select:invalid,
.input-group .form-select.is-invalid {
  z-index: 2;
}
.was-validated .input-group .form-control:invalid:focus, .input-group .form-control.is-invalid:focus,
.was-validated .input-group .form-select:invalid:focus,
.input-group .form-select.is-invalid:focus {
  z-index: 3;
}

.btn {
  display: inline-block;
  font-weight: 500;
  line-height: 1.5;
  color: #a1a1a8;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.5rem 1rem;
  font-size: 0.9375rem;
  border-radius: 0.4rem;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    -webkit-transition: none;
    transition: none;
  }
}
.btn:hover {
  color: #a1a1a8;
}
.btn-check:focus + .btn, .btn:focus {
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn:disabled, .btn.disabled, fieldset:disabled .btn {
  pointer-events: none;
  opacity: 0.65;
}

.btn-primary {
  color: #fff;
  background-color: #0f6fec;
  border-color: #0f6fec;
}
.btn-primary:hover {
  color: #fff;
  background-color: #0d5ec9;
  border-color: #0c59bd;
}
.btn-check:focus + .btn-primary, .btn-primary:focus {
  color: #fff;
  background-color: #0d5ec9;
  border-color: #0c59bd;
  -webkit-box-shadow: 0 0 0 0 rgba(51, 133, 239, 0.5);
          box-shadow: 0 0 0 0 rgba(51, 133, 239, 0.5);
}
.btn-check:checked + .btn-primary, .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0c59bd;
  border-color: #0b53b1;
}
.btn-check:checked + .btn-primary:focus, .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus, .show > .btn-primary.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(51, 133, 239, 0.5);
          box-shadow: 0 0 0 0 rgba(51, 133, 239, 0.5);
}
.btn-primary:disabled, .btn-primary.disabled {
  color: #fff;
  background-color: #0f6fec;
  border-color: #0f6fec;
}

.btn-secondary {
  color: #000;
  background-color: #c5c6cc;
  border-color: #c5c6cc;
}
.btn-secondary:hover {
  color: #000;
  background-color: #cecfd4;
  border-color: #cbccd1;
}
.btn-check:focus + .btn-secondary, .btn-secondary:focus {
  color: #000;
  background-color: #cecfd4;
  border-color: #cbccd1;
  -webkit-box-shadow: 0 0 0 0 rgba(167, 168, 173, 0.5);
          box-shadow: 0 0 0 0 rgba(167, 168, 173, 0.5);
}
.btn-check:checked + .btn-secondary, .btn-check:active + .btn-secondary, .btn-secondary:active, .btn-secondary.active, .show > .btn-secondary.dropdown-toggle {
  color: #000;
  background-color: #d1d1d6;
  border-color: #cbccd1;
}
.btn-check:checked + .btn-secondary:focus, .btn-check:active + .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active:focus, .show > .btn-secondary.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(167, 168, 173, 0.5);
          box-shadow: 0 0 0 0 rgba(167, 168, 173, 0.5);
}
.btn-secondary:disabled, .btn-secondary.disabled {
  color: #000;
  background-color: #c5c6cc;
  border-color: #c5c6cc;
}

.btn-success {
  color: #fff;
  background-color: #0cbc87;
  border-color: #0cbc87;
}
.btn-success:hover {
  color: #fff;
  background-color: #0aa073;
  border-color: #0a966c;
}
.btn-check:focus + .btn-success, .btn-success:focus {
  color: #fff;
  background-color: #0aa073;
  border-color: #0a966c;
  -webkit-box-shadow: 0 0 0 0 rgba(48, 198, 153, 0.5);
          box-shadow: 0 0 0 0 rgba(48, 198, 153, 0.5);
}
.btn-check:checked + .btn-success, .btn-check:active + .btn-success, .btn-success:active, .btn-success.active, .show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #0a966c;
  border-color: #098d65;
}
.btn-check:checked + .btn-success:focus, .btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus, .show > .btn-success.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(48, 198, 153, 0.5);
          box-shadow: 0 0 0 0 rgba(48, 198, 153, 0.5);
}
.btn-success:disabled, .btn-success.disabled {
  color: #fff;
  background-color: #0cbc87;
  border-color: #0cbc87;
}

.btn-info {
  color: #fff;
  background-color: #4f9ef8;
  border-color: #4f9ef8;
}
.btn-info:hover {
  color: #fff;
  background-color: #4386d3;
  border-color: #3f7ec6;
}
.btn-check:focus + .btn-info, .btn-info:focus {
  color: #fff;
  background-color: #4386d3;
  border-color: #3f7ec6;
  -webkit-box-shadow: 0 0 0 0 rgba(105, 173, 249, 0.5);
          box-shadow: 0 0 0 0 rgba(105, 173, 249, 0.5);
}
.btn-check:checked + .btn-info, .btn-check:active + .btn-info, .btn-info:active, .btn-info.active, .show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #3f7ec6;
  border-color: #3b77ba;
}
.btn-check:checked + .btn-info:focus, .btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus, .show > .btn-info.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(105, 173, 249, 0.5);
          box-shadow: 0 0 0 0 rgba(105, 173, 249, 0.5);
}
.btn-info:disabled, .btn-info.disabled {
  color: #fff;
  background-color: #4f9ef8;
  border-color: #4f9ef8;
}

.btn-warning {
  color: #000;
  background-color: #f7c32e;
  border-color: #f7c32e;
}
.btn-warning:hover {
  color: #000;
  background-color: #f8cc4d;
  border-color: #f8c943;
}
.btn-check:focus + .btn-warning, .btn-warning:focus {
  color: #000;
  background-color: #f8cc4d;
  border-color: #f8c943;
  -webkit-box-shadow: 0 0 0 0 rgba(210, 166, 39, 0.5);
          box-shadow: 0 0 0 0 rgba(210, 166, 39, 0.5);
}
.btn-check:checked + .btn-warning, .btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active, .show > .btn-warning.dropdown-toggle {
  color: #000;
  background-color: #f9cf58;
  border-color: #f8c943;
}
.btn-check:checked + .btn-warning:focus, .btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus, .show > .btn-warning.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(210, 166, 39, 0.5);
          box-shadow: 0 0 0 0 rgba(210, 166, 39, 0.5);
}
.btn-warning:disabled, .btn-warning.disabled {
  color: #000;
  background-color: #f7c32e;
  border-color: #f7c32e;
}

.btn-danger {
  color: #fff;
  background-color: #d6293e;
  border-color: #d6293e;
}
.btn-danger:hover {
  color: #fff;
  background-color: #b62335;
  border-color: #ab2132;
}
.btn-check:focus + .btn-danger, .btn-danger:focus {
  color: #fff;
  background-color: #b62335;
  border-color: #ab2132;
  -webkit-box-shadow: 0 0 0 0 rgba(220, 73, 91, 0.5);
          box-shadow: 0 0 0 0 rgba(220, 73, 91, 0.5);
}
.btn-check:checked + .btn-danger, .btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active, .show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #ab2132;
  border-color: #a11f2f;
}
.btn-check:checked + .btn-danger:focus, .btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus, .show > .btn-danger.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(220, 73, 91, 0.5);
          box-shadow: 0 0 0 0 rgba(220, 73, 91, 0.5);
}
.btn-danger:disabled, .btn-danger.disabled {
  color: #fff;
  background-color: #d6293e;
  border-color: #d6293e;
}

.btn-light {
  color: #fff;
  background-color: #202227;
  border-color: #202227;
}
.btn-light:hover {
  color: #fff;
  background-color: #1b1d21;
  border-color: #1a1b1f;
}
.btn-check:focus + .btn-light, .btn-light:focus {
  color: #fff;
  background-color: #1b1d21;
  border-color: #1a1b1f;
  -webkit-box-shadow: 0 0 0 0 rgba(65, 67, 71, 0.5);
          box-shadow: 0 0 0 0 rgba(65, 67, 71, 0.5);
}
.btn-check:checked + .btn-light, .btn-check:active + .btn-light, .btn-light:active, .btn-light.active, .show > .btn-light.dropdown-toggle {
  color: #fff;
  background-color: #1a1b1f;
  border-color: #181a1d;
}
.btn-check:checked + .btn-light:focus, .btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus, .show > .btn-light.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(65, 67, 71, 0.5);
          box-shadow: 0 0 0 0 rgba(65, 67, 71, 0.5);
}
.btn-light:disabled, .btn-light.disabled {
  color: #fff;
  background-color: #202227;
  border-color: #202227;
}

.btn-dark {
  color: #fff;
  background-color: #0f0f10;
  border-color: #0f0f10;
}
.btn-dark:hover {
  color: #fff;
  background-color: #0d0d0e;
  border-color: #0c0c0d;
}
.btn-check:focus + .btn-dark, .btn-dark:focus {
  color: #fff;
  background-color: #0d0d0e;
  border-color: #0c0c0d;
  -webkit-box-shadow: 0 0 0 0 rgba(51, 51, 52, 0.5);
          box-shadow: 0 0 0 0 rgba(51, 51, 52, 0.5);
}
.btn-check:checked + .btn-dark, .btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active, .show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #0c0c0d;
  border-color: #0b0b0c;
}
.btn-check:checked + .btn-dark:focus, .btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus, .show > .btn-dark.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(51, 51, 52, 0.5);
          box-shadow: 0 0 0 0 rgba(51, 51, 52, 0.5);
}
.btn-dark:disabled, .btn-dark.disabled {
  color: #fff;
  background-color: #0f0f10;
  border-color: #0f0f10;
}

.btn-outline-primary {
  color: #0f6fec;
  border-color: #0f6fec;
}
.btn-outline-primary:hover {
  color: #fff;
  background-color: #0f6fec;
  border-color: #0f6fec;
}
.btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.5);
          box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.5);
}
.btn-check:checked + .btn-outline-primary, .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
  color: #fff;
  background-color: #0f6fec;
  border-color: #0f6fec;
}
.btn-check:checked + .btn-outline-primary:focus, .btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.5);
          box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.5);
}
.btn-outline-primary:disabled, .btn-outline-primary.disabled {
  color: #0f6fec;
  background-color: transparent;
}

.btn-outline-secondary {
  color: #c5c6cc;
  border-color: #c5c6cc;
}
.btn-outline-secondary:hover {
  color: #000;
  background-color: #c5c6cc;
  border-color: #c5c6cc;
}
.btn-check:focus + .btn-outline-secondary, .btn-outline-secondary:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(197, 198, 204, 0.5);
          box-shadow: 0 0 0 0 rgba(197, 198, 204, 0.5);
}
.btn-check:checked + .btn-outline-secondary, .btn-check:active + .btn-outline-secondary, .btn-outline-secondary:active, .btn-outline-secondary.active, .btn-outline-secondary.dropdown-toggle.show {
  color: #000;
  background-color: #c5c6cc;
  border-color: #c5c6cc;
}
.btn-check:checked + .btn-outline-secondary:focus, .btn-check:active + .btn-outline-secondary:focus, .btn-outline-secondary:active:focus, .btn-outline-secondary.active:focus, .btn-outline-secondary.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(197, 198, 204, 0.5);
          box-shadow: 0 0 0 0 rgba(197, 198, 204, 0.5);
}
.btn-outline-secondary:disabled, .btn-outline-secondary.disabled {
  color: #c5c6cc;
  background-color: transparent;
}

.btn-outline-success {
  color: #0cbc87;
  border-color: #0cbc87;
}
.btn-outline-success:hover {
  color: #fff;
  background-color: #0cbc87;
  border-color: #0cbc87;
}
.btn-check:focus + .btn-outline-success, .btn-outline-success:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(12, 188, 135, 0.5);
          box-shadow: 0 0 0 0 rgba(12, 188, 135, 0.5);
}
.btn-check:checked + .btn-outline-success, .btn-check:active + .btn-outline-success, .btn-outline-success:active, .btn-outline-success.active, .btn-outline-success.dropdown-toggle.show {
  color: #fff;
  background-color: #0cbc87;
  border-color: #0cbc87;
}
.btn-check:checked + .btn-outline-success:focus, .btn-check:active + .btn-outline-success:focus, .btn-outline-success:active:focus, .btn-outline-success.active:focus, .btn-outline-success.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(12, 188, 135, 0.5);
          box-shadow: 0 0 0 0 rgba(12, 188, 135, 0.5);
}
.btn-outline-success:disabled, .btn-outline-success.disabled {
  color: #0cbc87;
  background-color: transparent;
}

.btn-outline-info {
  color: #4f9ef8;
  border-color: #4f9ef8;
}
.btn-outline-info:hover {
  color: #fff;
  background-color: #4f9ef8;
  border-color: #4f9ef8;
}
.btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(79, 158, 248, 0.5);
          box-shadow: 0 0 0 0 rgba(79, 158, 248, 0.5);
}
.btn-check:checked + .btn-outline-info, .btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
  color: #fff;
  background-color: #4f9ef8;
  border-color: #4f9ef8;
}
.btn-check:checked + .btn-outline-info:focus, .btn-check:active + .btn-outline-info:focus, .btn-outline-info:active:focus, .btn-outline-info.active:focus, .btn-outline-info.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(79, 158, 248, 0.5);
          box-shadow: 0 0 0 0 rgba(79, 158, 248, 0.5);
}
.btn-outline-info:disabled, .btn-outline-info.disabled {
  color: #4f9ef8;
  background-color: transparent;
}

.btn-outline-warning {
  color: #f7c32e;
  border-color: #f7c32e;
}
.btn-outline-warning:hover {
  color: #000;
  background-color: #f7c32e;
  border-color: #f7c32e;
}
.btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(247, 195, 46, 0.5);
          box-shadow: 0 0 0 0 rgba(247, 195, 46, 0.5);
}
.btn-check:checked + .btn-outline-warning, .btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
  color: #000;
  background-color: #f7c32e;
  border-color: #f7c32e;
}
.btn-check:checked + .btn-outline-warning:focus, .btn-check:active + .btn-outline-warning:focus, .btn-outline-warning:active:focus, .btn-outline-warning.active:focus, .btn-outline-warning.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(247, 195, 46, 0.5);
          box-shadow: 0 0 0 0 rgba(247, 195, 46, 0.5);
}
.btn-outline-warning:disabled, .btn-outline-warning.disabled {
  color: #f7c32e;
  background-color: transparent;
}

.btn-outline-danger {
  color: #d6293e;
  border-color: #d6293e;
}
.btn-outline-danger:hover {
  color: #fff;
  background-color: #d6293e;
  border-color: #d6293e;
}
.btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(214, 41, 62, 0.5);
          box-shadow: 0 0 0 0 rgba(214, 41, 62, 0.5);
}
.btn-check:checked + .btn-outline-danger, .btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
  color: #fff;
  background-color: #d6293e;
  border-color: #d6293e;
}
.btn-check:checked + .btn-outline-danger:focus, .btn-check:active + .btn-outline-danger:focus, .btn-outline-danger:active:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(214, 41, 62, 0.5);
          box-shadow: 0 0 0 0 rgba(214, 41, 62, 0.5);
}
.btn-outline-danger:disabled, .btn-outline-danger.disabled {
  color: #d6293e;
  background-color: transparent;
}

.btn-outline-light {
  color: #202227;
  border-color: #202227;
}
.btn-outline-light:hover {
  color: #fff;
  background-color: #202227;
  border-color: #202227;
}
.btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(32, 34, 39, 0.5);
          box-shadow: 0 0 0 0 rgba(32, 34, 39, 0.5);
}
.btn-check:checked + .btn-outline-light, .btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
  color: #fff;
  background-color: #202227;
  border-color: #202227;
}
.btn-check:checked + .btn-outline-light:focus, .btn-check:active + .btn-outline-light:focus, .btn-outline-light:active:focus, .btn-outline-light.active:focus, .btn-outline-light.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(32, 34, 39, 0.5);
          box-shadow: 0 0 0 0 rgba(32, 34, 39, 0.5);
}
.btn-outline-light:disabled, .btn-outline-light.disabled {
  color: #202227;
  background-color: transparent;
}

.btn-outline-dark {
  color: #0f0f10;
  border-color: #0f0f10;
}
.btn-outline-dark:hover {
  color: #fff;
  background-color: #0f0f10;
  border-color: #0f0f10;
}
.btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(15, 15, 16, 0.5);
          box-shadow: 0 0 0 0 rgba(15, 15, 16, 0.5);
}
.btn-check:checked + .btn-outline-dark, .btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
  color: #fff;
  background-color: #0f0f10;
  border-color: #0f0f10;
}
.btn-check:checked + .btn-outline-dark:focus, .btn-check:active + .btn-outline-dark:focus, .btn-outline-dark:active:focus, .btn-outline-dark.active:focus, .btn-outline-dark.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 0 rgba(15, 15, 16, 0.5);
          box-shadow: 0 0 0 0 rgba(15, 15, 16, 0.5);
}
.btn-outline-dark:disabled, .btn-outline-dark.disabled {
  color: #0f0f10;
  background-color: transparent;
}

.btn-link {
  font-weight: 500;
  color: #0f6fec;
  text-decoration: none;
}
.btn-link:hover {
  color: #0c59bd;
}
.btn-link:disabled, .btn-link.disabled {
  color: #e1e4e6;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 0.8rem 1.5rem;
  font-size: 1rem;
  border-radius: 0.2rem;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 0.4rem 0.8rem;
  font-size: 0.8125rem;
  border-radius: 0.2rem;
}

.fade {
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    -webkit-transition: none;
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    -webkit-transition: none;
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  -webkit-transition: width 0.35s ease;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    -webkit-transition: none;
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  z-index: 1000;
  display: none;
  min-width: 15rem;
  padding: 1rem 0;
  margin: 0;
  font-size: 0.9375rem;
  color: #a1a1a8;
  text-align: left;
  list-style: none;
  background-color: #0f0f10;
  background-clip: padding-box;
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 0.4rem;
}
.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: 0;
}

.dropdown-menu-start {
  --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}

.dropdown-menu-end {
  --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }

  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }

  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }

  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }

  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }

  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0;
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0;
}
.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropstart .dropdown-toggle::after {
  display: none;
}
.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #202227;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.4rem 1.2rem;
  clear: both;
  font-weight: 500;
  color: #c5c6cc;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover, .dropdown-item:focus {
  color: #0f6fec;
  background-color: transparent;
}
.dropdown-item.active, .dropdown-item:active {
  color: #0f6fec;
  text-decoration: none;
  background-color: transparent;
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: #676a79;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 1rem 1.2rem;
  margin-bottom: 0;
  font-size: 0.8203125rem;
  color: #14191e;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.4rem 1.2rem;
  color: #c5c6cc;
}

.dropdown-menu-dark {
  color: #eef0f2;
  background-color: #14191e;
  border-color: rgba(0, 0, 0, 0.06);
}
.dropdown-menu-dark .dropdown-item {
  color: #eef0f2;
}
.dropdown-menu-dark .dropdown-item:hover, .dropdown-menu-dark .dropdown-item:focus {
  color: #fff;
  background-color: transparent;
}
.dropdown-menu-dark .dropdown-item.active, .dropdown-menu-dark .dropdown-item:active {
  color: #0f6fec;
  background-color: transparent;
}
.dropdown-menu-dark .dropdown-item.disabled, .dropdown-menu-dark .dropdown-item:disabled {
  color: #a1a1a8;
}
.dropdown-menu-dark .dropdown-divider {
  border-color: rgba(255, 255, 255, 0.1);
}
.dropdown-menu-dark .dropdown-item-text {
  color: #eef0f2;
}
.dropdown-menu-dark .dropdown-header {
  color: #a1a1a8;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn:hover,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:nth-child(n+3),
.btn-group > :not(.btn-check) + .btn,
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.6rem;
  padding-left: 0.6rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn ~ .btn,
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.25rem 0.75rem;
  color: #a1a1a8;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    -webkit-transition: none;
    transition: none;
  }
}
.nav-link:hover, .nav-link:focus {
  color: #0c59bd;
}
.nav-link.disabled {
  color: #a1a1a8 !important;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-tabs .nav-link {
  margin-bottom: -1px;
  background: none;
  border: 1px solid transparent;
  border-top-left-radius: 0.4rem;
  border-top-right-radius: 0.4rem;
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #f0f1f3 #f0f1f3 rgba(255, 255, 255, 0.1);
  isolation: isolate;
}
.nav-tabs .nav-link.disabled {
  color: #a1a1a8 !important;
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #29292e;
  background-color: #eff2f6;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #eff2f6;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 0.4rem;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #202227;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
      flex-basis: 0;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-top: 0;
  padding-right: 0;
  padding-bottom: 0;
  padding-left: 0;
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl,
.navbar > .container-xxl {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
      flex-wrap: inherit;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.navbar-brand {
  padding-top: 10px;
  padding-bottom: 10px;
  margin-right: 1rem;
  font-size: 1.25rem;
  white-space: nowrap;
}
.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}
.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  -webkit-transition: -webkit-box-shadow 0.15s ease-in-out;
  transition: -webkit-box-shadow 0.15s ease-in-out;
  transition: box-shadow 0.15s ease-in-out;
  transition: box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    -webkit-transition: none;
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  -webkit-box-shadow: 0 0 0 0;
          box-shadow: 0 0 0 0;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    -webkit-transition: none;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-sm .offcanvas-top,
.navbar-expand-sm .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-sm .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    -webkit-transition: none;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-md .offcanvas-top,
.navbar-expand-md .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-md .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    -webkit-transition: none;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-lg .offcanvas-top,
.navbar-expand-lg .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-lg .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    -webkit-transition: none;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-xl .offcanvas-top,
.navbar-expand-xl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xl .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    -webkit-transition: none;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-xxl .offcanvas-top,
.navbar-expand-xxl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xxl .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: 1rem;
  padding-left: 1rem;
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
      flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas {
  position: inherit;
  bottom: 0;
  z-index: 1000;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  visibility: visible !important;
  background-color: transparent;
  border-right: 0;
  border-left: 0;
  -webkit-transition: none;
  transition: none;
  -webkit-transform: none;
          transform: none;
}
.navbar-expand .offcanvas-top,
.navbar-expand .offcanvas-bottom {
  height: auto;
  border-top: 0;
  border-bottom: 0;
}
.navbar-expand .offcanvas-body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 0;
      -ms-flex-positive: 0;
          flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link {
  color: #a1a1a8;
}
.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: #0f6fec;
}
.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .nav-link.active {
  color: #0f6fec;
}
.navbar-light .navbar-toggler {
  color: #a1a1a8;
  border-color: rgba(0, 0, 0, 0.1);
}
.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23a1a1a8' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-light .navbar-text {
  color: #a1a1a8;
}
.navbar-light .navbar-text a,
.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
  color: #0f6fec;
}

.navbar-dark .navbar-brand {
  color: #fff;
}
.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}
.navbar-dark .navbar-nav .nav-link {
  color: #fff;
}
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: #0f6fec !important;
}
.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .nav-link.active {
  color: #0f6fec !important;
}
.navbar-dark .navbar-toggler {
  color: #fff;
  border-color: rgba(255, 255, 255, 0.1);
}
.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-dark .navbar-text {
  color: #fff;
}
.navbar-dark .navbar-text a,
.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
  color: #0f6fec !important;
}

.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #141519;
  background-clip: border-box;
  border: 1px solid rgba(161, 161, 168, 0.06);
  border-radius: 0.4rem;
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: calc(0.4rem - 1px);
  border-top-right-radius: calc(0.4rem - 1px);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: calc(0.4rem - 1px);
  border-bottom-left-radius: calc(0.4rem - 1px);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  padding: 1.25rem 1.25rem;
}

.card-title {
  margin-bottom: 0.5rem;
}

.card-subtitle {
  margin-top: -0.25rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 1.25rem 1.25rem;
  margin-bottom: 0;
  background-color: #141519;
  border-bottom: 1px solid rgba(161, 161, 168, 0.06);
}
.card-header:first-child {
  border-radius: calc(0.4rem - 1px) calc(0.4rem - 1px) 0 0;
}

.card-footer {
  padding: 1.25rem 1.25rem;
  background-color: #141519;
  border-top: 1px solid rgba(161, 161, 168, 0.06);
}
.card-footer:last-child {
  border-radius: 0 0 calc(0.4rem - 1px) calc(0.4rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -1.25rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}
.card-header-tabs .nav-link.active {
  background-color: #141519;
  border-bottom-color: #141519;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
  border-radius: calc(0.4rem - 1px);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.4rem - 1px);
  border-top-right-radius: calc(0.4rem - 1px);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.4rem - 1px);
  border-bottom-left-radius: calc(0.4rem - 1px);
}

.card-group > .card {
  margin-bottom: 0.75rem;
}
@media (min-width: 576px) {
  .card-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
            flex-flow: row wrap;
  }
  .card-group > .card {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
.card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
.card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
.card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
.card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.accordion-button {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
  padding: 1rem 1.25rem;
  font-size: 0.9375rem;
  color: #a1a1a8;
  text-align: left;
  background-color: #191a1f;
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  -webkit-transition: all 0.3s ease-in-out, border-radius 0.15s ease;
  transition: all 0.3s ease-in-out, border-radius 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    -webkit-transition: none;
    transition: none;
  }
}
.accordion-button:not(.collapsed) {
  color: #a1a1a8;
  background-color: #191a1f;
  -webkit-box-shadow: inset 0 -1px 0 rgba(103, 106, 121, 0.125);
          box-shadow: inset 0 -1px 0 rgba(103, 106, 121, 0.125);
}
.accordion-button:not(.collapsed)::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23a1a1a8'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}
.accordion-button::after {
  -ms-flex-negative: 0;
      flex-shrink: 0;
  width: 1.25rem;
  height: 1.25rem;
  margin-left: auto;
  content: "";
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23a1a1a8'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-size: 1.25rem;
  -webkit-transition: -webkit-transform 0.2s ease-in-out;
  transition: -webkit-transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    -webkit-transition: none;
    transition: none;
  }
}
.accordion-button:hover {
  z-index: 2;
}
.accordion-button:focus {
  z-index: 3;
  border-color: none;
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  background-color: #191a1f;
  border: 1px solid rgba(103, 106, 121, 0.125);
}
.accordion-item:first-of-type {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.accordion-item:not(:first-of-type) {
  border-top: 0;
}
.accordion-item:last-of-type {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}
.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.accordion-body {
  padding: 1rem 1.25rem;
}

.accordion-flush .accordion-collapse {
  border-width: 0;
}
.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
  border-top: 0;
}
.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button {
  border-radius: 0;
}

.breadcrumb {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  padding: 0.5rem 0;
  margin-bottom: 1rem;
  list-style: none;
  background-color: transparent;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.8rem;
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: 0.8rem;
  color: #a1a1a8;
  content: var(--bs-breadcrumb-divider, "../../index.html") /* rtl: var(--bs-breadcrumb-divider, "/") */;
}
.breadcrumb-item.active {
  color: #a1a1a8;
}

.pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  color: #a1a1a8;
  background-color: #191a1f;
  border: 1px solid #30343c;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    -webkit-transition: none;
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: #fff;
  background-color: #0f6fec;
  border-color: #0f6fec;
}
.page-link:focus {
  z-index: 3;
  color: #0c59bd;
  background-color: #eff2f6;
  outline: 0;
  -webkit-box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.25);
          box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.25);
}

.page-item:not(:first-child) .page-link {
  margin-left: -1px;
}
.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #0f6fec;
  border-color: #0f6fec;
}
.page-item.disabled .page-link {
  color: #464950;
  pointer-events: none;
  background-color: #191a1f;
  border-color: #30343c;
}

.page-link {
  padding: 0.4rem 0.8rem;
}

.page-item:first-child .page-link {
  border-top-left-radius: 0.4rem;
  border-bottom-left-radius: 0.4rem;
}
.page-item:last-child .page-link {
  border-top-right-radius: 0.4rem;
  border-bottom-right-radius: 0.4rem;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.171875rem;
}
.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}
.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.8203125rem;
}
.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.35em 0.65em;
  font-size: 0.85em;
  font-weight: 400;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
}
.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 3rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}

.alert-primary {
  color: #09438e;
  background-color: #cfe2fb;
  border-color: #b7d4f9;
}
.alert-primary .alert-link {
  color: #073672;
}

.alert-secondary {
  color: #76777a;
  background-color: #f3f4f5;
  border-color: #eeeef0;
}
.alert-secondary .alert-link {
  color: #5e5f62;
}

.alert-success {
  color: #077151;
  background-color: #cef2e7;
  border-color: #b6ebdb;
}
.alert-success .alert-link {
  color: #065a41;
}

.alert-info {
  color: #2f5f95;
  background-color: #dcecfe;
  border-color: #cae2fd;
}
.alert-info .alert-link {
  color: #264c77;
}

.alert-warning {
  color: #94751c;
  background-color: #fdf3d5;
  border-color: #fdedc0;
}
.alert-warning .alert-link {
  color: #765e16;
}

.alert-danger {
  color: #801925;
  background-color: #f7d4d8;
  border-color: #f3bfc5;
}
.alert-danger .alert-link {
  color: #66141e;
}

.alert-light {
  color: #131417;
  background-color: #d2d3d4;
  border-color: #bcbdbe;
}
.alert-light .alert-link {
  color: #0f1012;
}

.alert-dark {
  color: #09090a;
  background-color: #cfcfcf;
  border-color: #b7b7b7;
}
.alert-dark .alert-link {
  color: #070708;
}

@-webkit-keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}
.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 0.25rem;
}

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #0d6efd;
  -webkit-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    -webkit-transition: none;
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  -webkit-animation: 1s linear infinite progress-bar-stripes;
          animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
            animation: none;
  }
}

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.4rem;
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered > li::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #202227;
}
.list-group-item-action:active {
  color: #212529;
  background-color: #202227;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.5rem 1rem;
  color: #a1a1a8;
  background-color: transparent;
  border: 1px solid rgba(255, 255, 255, 0.125);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: #30343c;
  pointer-events: none;
  background-color: transparent;
}
.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #202227;
  border-color: #202227;
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-horizontal {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 0.4rem;
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 0.4rem;
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 0.4rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 0.4rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 0.4rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 0.4rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 0.4rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 0.4rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 0.4rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 0.4rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child {
    border-bottom-left-radius: 0.4rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child {
    border-top-right-radius: 0.4rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #09438e;
  background-color: #cfe2fb;
}
.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #09438e;
  background-color: #bacbe2;
}
.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #09438e;
  border-color: #09438e;
}

.list-group-item-secondary {
  color: #76777a;
  background-color: #f3f4f5;
}
.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #76777a;
  background-color: #dbdcdd;
}
.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #76777a;
  border-color: #76777a;
}

.list-group-item-success {
  color: #077151;
  background-color: #cef2e7;
}
.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #077151;
  background-color: #b9dad0;
}
.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #077151;
  border-color: #077151;
}

.list-group-item-info {
  color: #2f5f95;
  background-color: #dcecfe;
}
.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #2f5f95;
  background-color: #c6d4e5;
}
.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #2f5f95;
  border-color: #2f5f95;
}

.list-group-item-warning {
  color: #94751c;
  background-color: #fdf3d5;
}
.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #94751c;
  background-color: #e4dbc0;
}
.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #94751c;
  border-color: #94751c;
}

.list-group-item-danger {
  color: #801925;
  background-color: #f7d4d8;
}
.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #801925;
  background-color: #debfc2;
}
.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #801925;
  border-color: #801925;
}

.list-group-item-light {
  color: #131417;
  background-color: #d2d3d4;
}
.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #131417;
  background-color: #bdbebf;
}
.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #131417;
  border-color: #131417;
}

.list-group-item-dark {
  color: #09090a;
  background-color: #cfcfcf;
}
.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #09090a;
  background-color: #bababa;
}
.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #09090a;
  border-color: #09090a;
}

.btn-close {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: #fff;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
  border: 0;
  border-radius: 0.4rem;
  opacity: 0.5;
}
.btn-close:hover {
  color: #fff;
  text-decoration: none;
  opacity: 0.75;
}
.btn-close:focus {
  outline: 0;
  -webkit-box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.25);
          box-shadow: 0 0 0 0 rgba(15, 111, 236, 0.25);
  opacity: 1;
}
.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  opacity: 0.25;
}

.btn-close-white {
  -webkit-filter: invert(1) grayscale(100%) brightness(200%);
          filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
  width: 350px;
  max-width: 100%;
  font-size: 0.875rem;
  pointer-events: auto;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}

.toast-container {
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container > :not(:last-child) {
  margin-bottom: 0.75rem;
}

.toast-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0.5rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.toast-header .btn-close {
  margin-right: -0.375rem;
  margin-left: 0.75rem;
}

.toast-body {
  padding: 0.75rem;
  word-wrap: break-word;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1055;
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform 0.3s ease-out;
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -50px);
          transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    -webkit-transition: none;
    transition: none;
  }
}
.modal.show .modal-dialog {
  -webkit-transform: none;
          transform: none;
}
.modal.modal-static .modal-dialog {
  -webkit-transform: scale(1.02);
          transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: calc(100% - 1rem);
}

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #191a1f;
  background-clip: padding-box;
  border: 0 solid rgba(0, 0, 0, 0.2);
  border-radius: 0.4rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: 0.7;
}

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  border-top-left-radius: 0.4rem;
  border-top-right-radius: 0.4rem;
}
.modal-header .btn-close {
  padding: 0.5rem 0.5rem;
  margin: -0.5rem -0.5rem -0.5rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  border-bottom-right-radius: 0.4rem;
  border-bottom-left-radius: 0.4rem;
}
.modal-footer > * {
  margin: 0.25rem;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }

  .modal-dialog-scrollable {
    height: calc(100% - 3.5rem);
  }

  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }

  .modal-sm {
    max-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
.modal-xl {
    max-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-header {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}
.modal-fullscreen .modal-footer {
  border-radius: 0;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
}
.tooltip {
  position: absolute;
  z-index: 1080;
  display: block;
  margin: 0;
  font-family: "Inter", sans-serif;
  font-style: normal;
  font-weight: 500;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.6875rem;
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: 0.9;
}
.tooltip .tooltip-arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[data-popper-placement^=top] {
  padding: 0.4rem 0;
}
.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
  bottom: 0;
}
.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
  top: -1px;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-end, .bs-tooltip-auto[data-popper-placement^=right] {
  padding: 0 0.4rem;
}
.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
  right: -1px;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[data-popper-placement^=bottom] {
  padding: 0.4rem 0;
}
.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
  top: 0;
}
.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-start, .bs-tooltip-auto[data-popper-placement^=left] {
  padding: 0 0.4rem;
}
.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  left: -1px;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0 /* rtl:ignore */;
  z-index: 1070;
  display: block;
  max-width: 276px;
  font-family: "Inter", sans-serif;
  font-style: normal;
  font-weight: 500;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}
.popover .popover-arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
}
.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
  bottom: calc(-0.5rem - 1px);
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}

.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}

.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
  top: calc(-0.5rem - 1px);
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f0f0f0;
}

.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.9375rem;
  color: #fff;
  background-color: #f0f0f0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 1rem 1rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  -ms-touch-action: pan-y;
      touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.6s ease-in-out;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    -webkit-transition: none;
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

/* rtl:begin:ignore */
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}

/* rtl:end:ignore */
.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-property: opacity;
  transition-property: opacity;
  -webkit-transform: none;
          transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  -webkit-transition: opacity 0s 0.6s;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
    -webkit-transition: none;
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  -webkit-transition: opacity 0.15s ease;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
.carousel-control-next {
    -webkit-transition: none;
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
  list-style: none;
}
.carousel-indicators [data-bs-target] {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  -webkit-box-flex: 0;
      -ms-flex: 0 1 auto;
          flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  -webkit-transition: opacity 0.6s ease;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    -webkit-transition: none;
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  -webkit-filter: invert(1) grayscale(100);
          filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}
.carousel-dark .carousel-caption {
  color: #000;
}

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
            transform: rotate(360deg) /* rtl:ignore */;
  }
}

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
            transform: rotate(360deg) /* rtl:ignore */;
  }
}
.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: 0.75s linear infinite spinner-border;
          animation: 0.75s linear infinite spinner-border;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: 0.75s linear infinite spinner-grow;
          animation: 0.75s linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
.spinner-grow {
    -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
  }
}
.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: 1045;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  max-width: 100%;
  visibility: hidden;
  background-color: #191a1f;
  background-clip: padding-box;
  outline: 0;
  -webkit-transition: -webkit-transform 0.3s ease-in-out;
  transition: -webkit-transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    -webkit-transition: none;
    transition: none;
  }
}

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.offcanvas-backdrop.fade {
  opacity: 0;
}
.offcanvas-backdrop.show {
  opacity: 0.5;
}

.offcanvas-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 1rem 1.5rem;
}
.offcanvas-header .btn-close {
  padding: 0.5rem 0.75rem;
  margin-top: -0.5rem;
  margin-right: -0.75rem;
  margin-bottom: -0.5rem;
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.offcanvas-body {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  padding: 1rem 1.5rem;
  overflow-y: auto;
}

.offcanvas-start {
  top: 0;
  left: 0;
  width: 400px;
  border-right: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}

.offcanvas-end {
  top: 0;
  right: 0;
  width: 400px;
  border-left: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}

.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}

.offcanvas-bottom {
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}

.offcanvas.show {
  -webkit-transform: none;
          transform: none;
}

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentColor;
  opacity: 0.5;
}
.placeholder.btn::before {
  display: inline-block;
  content: "";
}

.placeholder-xs {
  min-height: 0.6em;
}

.placeholder-sm {
  min-height: 0.8em;
}

.placeholder-lg {
  min-height: 1.2em;
}

.placeholder-glow .placeholder {
  -webkit-animation: placeholder-glow 2s ease-in-out infinite;
          animation: placeholder-glow 2s ease-in-out infinite;
}

@-webkit-keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}

@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
.placeholder-wave {
  -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
          mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  -webkit-mask-size: 200% 100%;
          mask-size: 200% 100%;
  -webkit-animation: placeholder-wave 2s linear infinite;
          animation: placeholder-wave 2s linear infinite;
}

@-webkit-keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
            mask-position: -200% 0%;
  }
}

@keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
            mask-position: -200% 0%;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.link-primary {
  color: #0f6fec;
}
.link-primary:hover, .link-primary:focus {
  color: #0c59bd;
}

.link-secondary {
  color: #c5c6cc;
}
.link-secondary:hover, .link-secondary:focus {
  color: #d1d1d6;
}

.link-success {
  color: #0cbc87;
}
.link-success:hover, .link-success:focus {
  color: #0a966c;
}

.link-info {
  color: #4f9ef8;
}
.link-info:hover, .link-info:focus {
  color: #3f7ec6;
}

.link-warning {
  color: #f7c32e;
}
.link-warning:hover, .link-warning:focus {
  color: #f9cf58;
}

.link-danger {
  color: #d6293e;
}
.link-danger:hover, .link-danger:focus {
  color: #ab2132;
}

.link-light {
  color: #202227;
}
.link-light:hover, .link-light:focus {
  color: #1a1b1f;
}

.link-dark {
  color: #0f0f10;
}
.link-dark:hover, .link-dark:focus {
  color: #0c0c0d;
}

.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: 75%;
}

.ratio-16x9 {
  --bs-aspect-ratio: 56.25%;
}

.ratio-21x9 {
  --bs-aspect-ratio: 42.8571428571%;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
.hstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-item-align: stretch;
      align-self: stretch;
}

.vstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -ms-flex-item-align: stretch;
      align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  -ms-flex-item-align: stretch;
      align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentColor;
  opacity: 0.6;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-25 {
  opacity: 0.25 !important;
}

.opacity-50 {
  opacity: 0.5 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-100 {
  opacity: 1 !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

.d-none {
  display: none !important;
}

.shadow {
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}

.shadow-sm {
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}

.shadow-lg {
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}

.shadow-none {
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.translate-middle {
  -webkit-transform: translate(-50%, -50%) !important;
          transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  -webkit-transform: translateX(-50%) !important;
          transform: translateX(-50%) !important;
}

.translate-middle-y {
  -webkit-transform: translateY(-50%) !important;
          transform: translateY(-50%) !important;
}

.border {
  border: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.border-0 {
  border: 0 !important;
}

.border-top {
  border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-end {
  border-right: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-bottom {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-start {
  border-left: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #0f6fec !important;
}

.border-secondary {
  border-color: #c5c6cc !important;
}

.border-success {
  border-color: #0cbc87 !important;
}

.border-info {
  border-color: #4f9ef8 !important;
}

.border-warning {
  border-color: #f7c32e !important;
}

.border-danger {
  border-color: #d6293e !important;
}

.border-light {
  border-color: #202227 !important;
}

.border-dark {
  border-color: #0f0f10 !important;
}

.border-white {
  border-color: #fff !important;
}

.border-1 {
  border-width: 1px !important;
}

.border-2 {
  border-width: 2px !important;
}

.border-3 {
  border-width: 3px !important;
}

.border-4 {
  border-width: 4px !important;
}

.border-5 {
  border-width: 5px !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  -webkit-box-flex: 1 !important;
      -ms-flex: 1 1 auto !important;
          flex: 1 1 auto !important;
}

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
      -ms-flex-direction: row !important;
          flex-direction: row !important;
}

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
      -ms-flex-direction: column !important;
          flex-direction: column !important;
}

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
      -ms-flex-direction: row-reverse !important;
          flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
      -ms-flex-direction: column-reverse !important;
          flex-direction: column-reverse !important;
}

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
      -ms-flex-positive: 0 !important;
          flex-grow: 0 !important;
}

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
      -ms-flex-positive: 1 !important;
          flex-grow: 1 !important;
}

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
      flex-shrink: 0 !important;
}

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
      flex-shrink: 1 !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
      flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
      flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
      flex-wrap: wrap-reverse !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.justify-content-start {
  -webkit-box-pack: start !important;
      -ms-flex-pack: start !important;
          justify-content: flex-start !important;
}

.justify-content-end {
  -webkit-box-pack: end !important;
      -ms-flex-pack: end !important;
          justify-content: flex-end !important;
}

.justify-content-center {
  -webkit-box-pack: center !important;
      -ms-flex-pack: center !important;
          justify-content: center !important;
}

.justify-content-between {
  -webkit-box-pack: justify !important;
      -ms-flex-pack: justify !important;
          justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
      justify-content: space-around !important;
}

.justify-content-evenly {
  -webkit-box-pack: space-evenly !important;
      -ms-flex-pack: space-evenly !important;
          justify-content: space-evenly !important;
}

.align-items-start {
  -webkit-box-align: start !important;
      -ms-flex-align: start !important;
          align-items: flex-start !important;
}

.align-items-end {
  -webkit-box-align: end !important;
      -ms-flex-align: end !important;
          align-items: flex-end !important;
}

.align-items-center {
  -webkit-box-align: center !important;
      -ms-flex-align: center !important;
          align-items: center !important;
}

.align-items-baseline {
  -webkit-box-align: baseline !important;
      -ms-flex-align: baseline !important;
          align-items: baseline !important;
}

.align-items-stretch {
  -webkit-box-align: stretch !important;
      -ms-flex-align: stretch !important;
          align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
      align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
      align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
      align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
      align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
      align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
      align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
      align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
      align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
      align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
      align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
      align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
      align-self: stretch !important;
}

.order-first {
  -webkit-box-ordinal-group: 0 !important;
      -ms-flex-order: -1 !important;
          order: -1 !important;
}

.order-0 {
  -webkit-box-ordinal-group: 1 !important;
      -ms-flex-order: 0 !important;
          order: 0 !important;
}

.order-1 {
  -webkit-box-ordinal-group: 2 !important;
      -ms-flex-order: 1 !important;
          order: 1 !important;
}

.order-2 {
  -webkit-box-ordinal-group: 3 !important;
      -ms-flex-order: 2 !important;
          order: 2 !important;
}

.order-3 {
  -webkit-box-ordinal-group: 4 !important;
      -ms-flex-order: 3 !important;
          order: 3 !important;
}

.order-4 {
  -webkit-box-ordinal-group: 5 !important;
      -ms-flex-order: 4 !important;
          order: 4 !important;
}

.order-5 {
  -webkit-box-ordinal-group: 6 !important;
      -ms-flex-order: 5 !important;
          order: 5 !important;
}

.order-last {
  -webkit-box-ordinal-group: 7 !important;
      -ms-flex-order: 6 !important;
          order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mx-n1 {
  margin-right: -0.25rem !important;
  margin-left: -0.25rem !important;
}

.mx-n2 {
  margin-right: -0.5rem !important;
  margin-left: -0.5rem !important;
}

.mx-n3 {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}

.mx-n4 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important;
}

.mx-n5 {
  margin-right: -3rem !important;
  margin-left: -3rem !important;
}

.my-n1 {
  margin-top: -0.25rem !important;
  margin-bottom: -0.25rem !important;
}

.my-n2 {
  margin-top: -0.5rem !important;
  margin-bottom: -0.5rem !important;
}

.my-n3 {
  margin-top: -1rem !important;
  margin-bottom: -1rem !important;
}

.my-n4 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important;
}

.my-n5 {
  margin-top: -3rem !important;
  margin-bottom: -3rem !important;
}

.mt-n1 {
  margin-top: -0.25rem !important;
}

.mt-n2 {
  margin-top: -0.5rem !important;
}

.mt-n3 {
  margin-top: -1rem !important;
}

.mt-n4 {
  margin-top: -1.5rem !important;
}

.mt-n5 {
  margin-top: -3rem !important;
}

.me-n1 {
  margin-right: -0.25rem !important;
}

.me-n2 {
  margin-right: -0.5rem !important;
}

.me-n3 {
  margin-right: -1rem !important;
}

.me-n4 {
  margin-right: -1.5rem !important;
}

.me-n5 {
  margin-right: -3rem !important;
}

.mb-n1 {
  margin-bottom: -0.25rem !important;
}

.mb-n2 {
  margin-bottom: -0.5rem !important;
}

.mb-n3 {
  margin-bottom: -1rem !important;
}

.mb-n4 {
  margin-bottom: -1.5rem !important;
}

.mb-n5 {
  margin-bottom: -3rem !important;
}

.ms-n1 {
  margin-left: -0.25rem !important;
}

.ms-n2 {
  margin-left: -0.5rem !important;
}

.ms-n3 {
  margin-left: -1rem !important;
}

.ms-n4 {
  margin-left: -1.5rem !important;
}

.ms-n5 {
  margin-left: -3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.359375rem + 1.3125vw) !important;
}

.fs-2 {
  font-size: calc(1.3125rem + 0.75vw) !important;
}

.fs-3 {
  font-size: calc(1.2890625rem + 0.46875vw) !important;
}

.fs-4 {
  font-size: calc(1.265625rem + 0.1875vw) !important;
}

.fs-5 {
  font-size: 1.171875rem !important;
}

.fs-6 {
  font-size: 0.9375rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-light {
  font-weight: 400 !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-normal {
  font-weight: 500 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.5 !important;
}

.lh-lg {
  line-height: 2 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
}

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
}

.text-body {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
}

.text-muted {
  --bs-text-opacity: 1;
  color: #e1e4e6 !important;
}

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}

.text-opacity-25 {
  --bs-text-opacity: 0.25;
}

.text-opacity-50 {
  --bs-text-opacity: 0.5;
}

.text-opacity-75 {
  --bs-text-opacity: 0.75;
}

.text-opacity-100 {
  --bs-text-opacity: 1;
}

.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}

.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}

.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
}

.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --bs-bg-opacity: 1;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  -webkit-user-select: all !important;
     -moz-user-select: all !important;
          user-select: all !important;
}

.user-select-auto {
  -webkit-user-select: auto !important;
     -moz-user-select: auto !important;
      -ms-user-select: auto !important;
          user-select: auto !important;
}

.user-select-none {
  -webkit-user-select: none !important;
     -moz-user-select: none !important;
      -ms-user-select: none !important;
          user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded {
  border-radius: 0.4rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: 0.2rem !important;
}

.rounded-2 {
  border-radius: 0.4rem !important;
}

.rounded-3 {
  border-radius: 0.7rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-top {
  border-top-left-radius: 0.4rem !important;
  border-top-right-radius: 0.4rem !important;
}

.rounded-end {
  border-top-right-radius: 0.4rem !important;
  border-bottom-right-radius: 0.4rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.4rem !important;
  border-bottom-left-radius: 0.4rem !important;
}

.rounded-start {
  border-bottom-left-radius: 0.4rem !important;
  border-top-left-radius: 0.4rem !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }

  .float-sm-end {
    float: right !important;
  }

  .float-sm-none {
    float: none !important;
  }

  .d-sm-inline {
    display: inline !important;
  }

  .d-sm-inline-block {
    display: inline-block !important;
  }

  .d-sm-block {
    display: block !important;
  }

  .d-sm-grid {
    display: grid !important;
  }

  .d-sm-table {
    display: table !important;
  }

  .d-sm-table-row {
    display: table-row !important;
  }

  .d-sm-table-cell {
    display: table-cell !important;
  }

  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }

  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }

  .d-sm-none {
    display: none !important;
  }

  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }

  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }

  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }

  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }

  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }

  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }

  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }

  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }

  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }

  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }

  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }

  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }

  .gap-sm-0 {
    gap: 0 !important;
  }

  .gap-sm-1 {
    gap: 0.25rem !important;
  }

  .gap-sm-2 {
    gap: 0.5rem !important;
  }

  .gap-sm-3 {
    gap: 1rem !important;
  }

  .gap-sm-4 {
    gap: 1.5rem !important;
  }

  .gap-sm-5 {
    gap: 3rem !important;
  }

  .justify-content-sm-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }

  .justify-content-sm-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }

  .justify-content-sm-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }

  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }

  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }

  .justify-content-sm-evenly {
    -webkit-box-pack: space-evenly !important;
        -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
  }

  .align-items-sm-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }

  .align-items-sm-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }

  .align-items-sm-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }

  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }

  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }

  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }

  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }

  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }

  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }

  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }

  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }

  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }

  .align-self-sm-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }

  .align-self-sm-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }

  .align-self-sm-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }

  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }

  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }

  .order-sm-first {
    -webkit-box-ordinal-group: 0 !important;
        -ms-flex-order: -1 !important;
            order: -1 !important;
  }

  .order-sm-0 {
    -webkit-box-ordinal-group: 1 !important;
        -ms-flex-order: 0 !important;
            order: 0 !important;
  }

  .order-sm-1 {
    -webkit-box-ordinal-group: 2 !important;
        -ms-flex-order: 1 !important;
            order: 1 !important;
  }

  .order-sm-2 {
    -webkit-box-ordinal-group: 3 !important;
        -ms-flex-order: 2 !important;
            order: 2 !important;
  }

  .order-sm-3 {
    -webkit-box-ordinal-group: 4 !important;
        -ms-flex-order: 3 !important;
            order: 3 !important;
  }

  .order-sm-4 {
    -webkit-box-ordinal-group: 5 !important;
        -ms-flex-order: 4 !important;
            order: 4 !important;
  }

  .order-sm-5 {
    -webkit-box-ordinal-group: 6 !important;
        -ms-flex-order: 5 !important;
            order: 5 !important;
  }

  .order-sm-last {
    -webkit-box-ordinal-group: 7 !important;
        -ms-flex-order: 6 !important;
            order: 6 !important;
  }

  .m-sm-0 {
    margin: 0 !important;
  }

  .m-sm-1 {
    margin: 0.25rem !important;
  }

  .m-sm-2 {
    margin: 0.5rem !important;
  }

  .m-sm-3 {
    margin: 1rem !important;
  }

  .m-sm-4 {
    margin: 1.5rem !important;
  }

  .m-sm-5 {
    margin: 3rem !important;
  }

  .m-sm-auto {
    margin: auto !important;
  }

  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-sm-0 {
    margin-top: 0 !important;
  }

  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }

  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }

  .mt-sm-3 {
    margin-top: 1rem !important;
  }

  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }

  .mt-sm-5 {
    margin-top: 3rem !important;
  }

  .mt-sm-auto {
    margin-top: auto !important;
  }

  .me-sm-0 {
    margin-right: 0 !important;
  }

  .me-sm-1 {
    margin-right: 0.25rem !important;
  }

  .me-sm-2 {
    margin-right: 0.5rem !important;
  }

  .me-sm-3 {
    margin-right: 1rem !important;
  }

  .me-sm-4 {
    margin-right: 1.5rem !important;
  }

  .me-sm-5 {
    margin-right: 3rem !important;
  }

  .me-sm-auto {
    margin-right: auto !important;
  }

  .mb-sm-0 {
    margin-bottom: 0 !important;
  }

  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }

  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }

  .mb-sm-auto {
    margin-bottom: auto !important;
  }

  .ms-sm-0 {
    margin-left: 0 !important;
  }

  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }

  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }

  .ms-sm-3 {
    margin-left: 1rem !important;
  }

  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }

  .ms-sm-5 {
    margin-left: 3rem !important;
  }

  .ms-sm-auto {
    margin-left: auto !important;
  }

  .m-sm-n1 {
    margin: -0.25rem !important;
  }

  .m-sm-n2 {
    margin: -0.5rem !important;
  }

  .m-sm-n3 {
    margin: -1rem !important;
  }

  .m-sm-n4 {
    margin: -1.5rem !important;
  }

  .m-sm-n5 {
    margin: -3rem !important;
  }

  .mx-sm-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-sm-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-sm-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-sm-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-sm-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-sm-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-sm-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-sm-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-sm-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-sm-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-sm-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-sm-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-sm-n3 {
    margin-top: -1rem !important;
  }

  .mt-sm-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-sm-n5 {
    margin-top: -3rem !important;
  }

  .me-sm-n1 {
    margin-right: -0.25rem !important;
  }

  .me-sm-n2 {
    margin-right: -0.5rem !important;
  }

  .me-sm-n3 {
    margin-right: -1rem !important;
  }

  .me-sm-n4 {
    margin-right: -1.5rem !important;
  }

  .me-sm-n5 {
    margin-right: -3rem !important;
  }

  .mb-sm-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-sm-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-sm-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-sm-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-sm-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-sm-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-sm-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-sm-n3 {
    margin-left: -1rem !important;
  }

  .ms-sm-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-sm-n5 {
    margin-left: -3rem !important;
  }

  .p-sm-0 {
    padding: 0 !important;
  }

  .p-sm-1 {
    padding: 0.25rem !important;
  }

  .p-sm-2 {
    padding: 0.5rem !important;
  }

  .p-sm-3 {
    padding: 1rem !important;
  }

  .p-sm-4 {
    padding: 1.5rem !important;
  }

  .p-sm-5 {
    padding: 3rem !important;
  }

  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-sm-0 {
    padding-top: 0 !important;
  }

  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }

  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }

  .pt-sm-3 {
    padding-top: 1rem !important;
  }

  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }

  .pt-sm-5 {
    padding-top: 3rem !important;
  }

  .pe-sm-0 {
    padding-right: 0 !important;
  }

  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }

  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }

  .pe-sm-3 {
    padding-right: 1rem !important;
  }

  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }

  .pe-sm-5 {
    padding-right: 3rem !important;
  }

  .pb-sm-0 {
    padding-bottom: 0 !important;
  }

  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }

  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }

  .ps-sm-0 {
    padding-left: 0 !important;
  }

  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }

  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }

  .ps-sm-3 {
    padding-left: 1rem !important;
  }

  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }

  .ps-sm-5 {
    padding-left: 3rem !important;
  }

  .text-sm-start {
    text-align: left !important;
  }

  .text-sm-end {
    text-align: right !important;
  }

  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }

  .float-md-end {
    float: right !important;
  }

  .float-md-none {
    float: none !important;
  }

  .d-md-inline {
    display: inline !important;
  }

  .d-md-inline-block {
    display: inline-block !important;
  }

  .d-md-block {
    display: block !important;
  }

  .d-md-grid {
    display: grid !important;
  }

  .d-md-table {
    display: table !important;
  }

  .d-md-table-row {
    display: table-row !important;
  }

  .d-md-table-cell {
    display: table-cell !important;
  }

  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }

  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }

  .d-md-none {
    display: none !important;
  }

  .flex-md-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }

  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }

  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }

  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }

  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }

  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }

  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }

  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }

  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }

  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }

  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }

  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }

  .gap-md-0 {
    gap: 0 !important;
  }

  .gap-md-1 {
    gap: 0.25rem !important;
  }

  .gap-md-2 {
    gap: 0.5rem !important;
  }

  .gap-md-3 {
    gap: 1rem !important;
  }

  .gap-md-4 {
    gap: 1.5rem !important;
  }

  .gap-md-5 {
    gap: 3rem !important;
  }

  .justify-content-md-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }

  .justify-content-md-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }

  .justify-content-md-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }

  .justify-content-md-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }

  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }

  .justify-content-md-evenly {
    -webkit-box-pack: space-evenly !important;
        -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
  }

  .align-items-md-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }

  .align-items-md-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }

  .align-items-md-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }

  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }

  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }

  .align-content-md-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }

  .align-content-md-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }

  .align-content-md-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }

  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }

  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }

  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }

  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }

  .align-self-md-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }

  .align-self-md-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }

  .align-self-md-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }

  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }

  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }

  .order-md-first {
    -webkit-box-ordinal-group: 0 !important;
        -ms-flex-order: -1 !important;
            order: -1 !important;
  }

  .order-md-0 {
    -webkit-box-ordinal-group: 1 !important;
        -ms-flex-order: 0 !important;
            order: 0 !important;
  }

  .order-md-1 {
    -webkit-box-ordinal-group: 2 !important;
        -ms-flex-order: 1 !important;
            order: 1 !important;
  }

  .order-md-2 {
    -webkit-box-ordinal-group: 3 !important;
        -ms-flex-order: 2 !important;
            order: 2 !important;
  }

  .order-md-3 {
    -webkit-box-ordinal-group: 4 !important;
        -ms-flex-order: 3 !important;
            order: 3 !important;
  }

  .order-md-4 {
    -webkit-box-ordinal-group: 5 !important;
        -ms-flex-order: 4 !important;
            order: 4 !important;
  }

  .order-md-5 {
    -webkit-box-ordinal-group: 6 !important;
        -ms-flex-order: 5 !important;
            order: 5 !important;
  }

  .order-md-last {
    -webkit-box-ordinal-group: 7 !important;
        -ms-flex-order: 6 !important;
            order: 6 !important;
  }

  .m-md-0 {
    margin: 0 !important;
  }

  .m-md-1 {
    margin: 0.25rem !important;
  }

  .m-md-2 {
    margin: 0.5rem !important;
  }

  .m-md-3 {
    margin: 1rem !important;
  }

  .m-md-4 {
    margin: 1.5rem !important;
  }

  .m-md-5 {
    margin: 3rem !important;
  }

  .m-md-auto {
    margin: auto !important;
  }

  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-md-0 {
    margin-top: 0 !important;
  }

  .mt-md-1 {
    margin-top: 0.25rem !important;
  }

  .mt-md-2 {
    margin-top: 0.5rem !important;
  }

  .mt-md-3 {
    margin-top: 1rem !important;
  }

  .mt-md-4 {
    margin-top: 1.5rem !important;
  }

  .mt-md-5 {
    margin-top: 3rem !important;
  }

  .mt-md-auto {
    margin-top: auto !important;
  }

  .me-md-0 {
    margin-right: 0 !important;
  }

  .me-md-1 {
    margin-right: 0.25rem !important;
  }

  .me-md-2 {
    margin-right: 0.5rem !important;
  }

  .me-md-3 {
    margin-right: 1rem !important;
  }

  .me-md-4 {
    margin-right: 1.5rem !important;
  }

  .me-md-5 {
    margin-right: 3rem !important;
  }

  .me-md-auto {
    margin-right: auto !important;
  }

  .mb-md-0 {
    margin-bottom: 0 !important;
  }

  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-md-3 {
    margin-bottom: 1rem !important;
  }

  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-md-5 {
    margin-bottom: 3rem !important;
  }

  .mb-md-auto {
    margin-bottom: auto !important;
  }

  .ms-md-0 {
    margin-left: 0 !important;
  }

  .ms-md-1 {
    margin-left: 0.25rem !important;
  }

  .ms-md-2 {
    margin-left: 0.5rem !important;
  }

  .ms-md-3 {
    margin-left: 1rem !important;
  }

  .ms-md-4 {
    margin-left: 1.5rem !important;
  }

  .ms-md-5 {
    margin-left: 3rem !important;
  }

  .ms-md-auto {
    margin-left: auto !important;
  }

  .m-md-n1 {
    margin: -0.25rem !important;
  }

  .m-md-n2 {
    margin: -0.5rem !important;
  }

  .m-md-n3 {
    margin: -1rem !important;
  }

  .m-md-n4 {
    margin: -1.5rem !important;
  }

  .m-md-n5 {
    margin: -3rem !important;
  }

  .mx-md-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-md-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-md-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-md-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-md-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-md-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-md-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-md-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-md-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-md-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-md-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-md-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-md-n3 {
    margin-top: -1rem !important;
  }

  .mt-md-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-md-n5 {
    margin-top: -3rem !important;
  }

  .me-md-n1 {
    margin-right: -0.25rem !important;
  }

  .me-md-n2 {
    margin-right: -0.5rem !important;
  }

  .me-md-n3 {
    margin-right: -1rem !important;
  }

  .me-md-n4 {
    margin-right: -1.5rem !important;
  }

  .me-md-n5 {
    margin-right: -3rem !important;
  }

  .mb-md-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-md-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-md-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-md-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-md-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-md-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-md-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-md-n3 {
    margin-left: -1rem !important;
  }

  .ms-md-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-md-n5 {
    margin-left: -3rem !important;
  }

  .p-md-0 {
    padding: 0 !important;
  }

  .p-md-1 {
    padding: 0.25rem !important;
  }

  .p-md-2 {
    padding: 0.5rem !important;
  }

  .p-md-3 {
    padding: 1rem !important;
  }

  .p-md-4 {
    padding: 1.5rem !important;
  }

  .p-md-5 {
    padding: 3rem !important;
  }

  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-md-0 {
    padding-top: 0 !important;
  }

  .pt-md-1 {
    padding-top: 0.25rem !important;
  }

  .pt-md-2 {
    padding-top: 0.5rem !important;
  }

  .pt-md-3 {
    padding-top: 1rem !important;
  }

  .pt-md-4 {
    padding-top: 1.5rem !important;
  }

  .pt-md-5 {
    padding-top: 3rem !important;
  }

  .pe-md-0 {
    padding-right: 0 !important;
  }

  .pe-md-1 {
    padding-right: 0.25rem !important;
  }

  .pe-md-2 {
    padding-right: 0.5rem !important;
  }

  .pe-md-3 {
    padding-right: 1rem !important;
  }

  .pe-md-4 {
    padding-right: 1.5rem !important;
  }

  .pe-md-5 {
    padding-right: 3rem !important;
  }

  .pb-md-0 {
    padding-bottom: 0 !important;
  }

  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-md-3 {
    padding-bottom: 1rem !important;
  }

  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-md-5 {
    padding-bottom: 3rem !important;
  }

  .ps-md-0 {
    padding-left: 0 !important;
  }

  .ps-md-1 {
    padding-left: 0.25rem !important;
  }

  .ps-md-2 {
    padding-left: 0.5rem !important;
  }

  .ps-md-3 {
    padding-left: 1rem !important;
  }

  .ps-md-4 {
    padding-left: 1.5rem !important;
  }

  .ps-md-5 {
    padding-left: 3rem !important;
  }

  .text-md-start {
    text-align: left !important;
  }

  .text-md-end {
    text-align: right !important;
  }

  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }

  .float-lg-end {
    float: right !important;
  }

  .float-lg-none {
    float: none !important;
  }

  .d-lg-inline {
    display: inline !important;
  }

  .d-lg-inline-block {
    display: inline-block !important;
  }

  .d-lg-block {
    display: block !important;
  }

  .d-lg-grid {
    display: grid !important;
  }

  .d-lg-table {
    display: table !important;
  }

  .d-lg-table-row {
    display: table-row !important;
  }

  .d-lg-table-cell {
    display: table-cell !important;
  }

  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }

  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }

  .d-lg-none {
    display: none !important;
  }

  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }

  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }

  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }

  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }

  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }

  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }

  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }

  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }

  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }

  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }

  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }

  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }

  .gap-lg-0 {
    gap: 0 !important;
  }

  .gap-lg-1 {
    gap: 0.25rem !important;
  }

  .gap-lg-2 {
    gap: 0.5rem !important;
  }

  .gap-lg-3 {
    gap: 1rem !important;
  }

  .gap-lg-4 {
    gap: 1.5rem !important;
  }

  .gap-lg-5 {
    gap: 3rem !important;
  }

  .justify-content-lg-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }

  .justify-content-lg-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }

  .justify-content-lg-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }

  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }

  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }

  .justify-content-lg-evenly {
    -webkit-box-pack: space-evenly !important;
        -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
  }

  .align-items-lg-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }

  .align-items-lg-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }

  .align-items-lg-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }

  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }

  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }

  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }

  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }

  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }

  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }

  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }

  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }

  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }

  .align-self-lg-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }

  .align-self-lg-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }

  .align-self-lg-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }

  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }

  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }

  .order-lg-first {
    -webkit-box-ordinal-group: 0 !important;
        -ms-flex-order: -1 !important;
            order: -1 !important;
  }

  .order-lg-0 {
    -webkit-box-ordinal-group: 1 !important;
        -ms-flex-order: 0 !important;
            order: 0 !important;
  }

  .order-lg-1 {
    -webkit-box-ordinal-group: 2 !important;
        -ms-flex-order: 1 !important;
            order: 1 !important;
  }

  .order-lg-2 {
    -webkit-box-ordinal-group: 3 !important;
        -ms-flex-order: 2 !important;
            order: 2 !important;
  }

  .order-lg-3 {
    -webkit-box-ordinal-group: 4 !important;
        -ms-flex-order: 3 !important;
            order: 3 !important;
  }

  .order-lg-4 {
    -webkit-box-ordinal-group: 5 !important;
        -ms-flex-order: 4 !important;
            order: 4 !important;
  }

  .order-lg-5 {
    -webkit-box-ordinal-group: 6 !important;
        -ms-flex-order: 5 !important;
            order: 5 !important;
  }

  .order-lg-last {
    -webkit-box-ordinal-group: 7 !important;
        -ms-flex-order: 6 !important;
            order: 6 !important;
  }

  .m-lg-0 {
    margin: 0 !important;
  }

  .m-lg-1 {
    margin: 0.25rem !important;
  }

  .m-lg-2 {
    margin: 0.5rem !important;
  }

  .m-lg-3 {
    margin: 1rem !important;
  }

  .m-lg-4 {
    margin: 1.5rem !important;
  }

  .m-lg-5 {
    margin: 3rem !important;
  }

  .m-lg-auto {
    margin: auto !important;
  }

  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-lg-0 {
    margin-top: 0 !important;
  }

  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }

  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }

  .mt-lg-3 {
    margin-top: 1rem !important;
  }

  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }

  .mt-lg-5 {
    margin-top: 3rem !important;
  }

  .mt-lg-auto {
    margin-top: auto !important;
  }

  .me-lg-0 {
    margin-right: 0 !important;
  }

  .me-lg-1 {
    margin-right: 0.25rem !important;
  }

  .me-lg-2 {
    margin-right: 0.5rem !important;
  }

  .me-lg-3 {
    margin-right: 1rem !important;
  }

  .me-lg-4 {
    margin-right: 1.5rem !important;
  }

  .me-lg-5 {
    margin-right: 3rem !important;
  }

  .me-lg-auto {
    margin-right: auto !important;
  }

  .mb-lg-0 {
    margin-bottom: 0 !important;
  }

  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }

  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }

  .mb-lg-auto {
    margin-bottom: auto !important;
  }

  .ms-lg-0 {
    margin-left: 0 !important;
  }

  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }

  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }

  .ms-lg-3 {
    margin-left: 1rem !important;
  }

  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }

  .ms-lg-5 {
    margin-left: 3rem !important;
  }

  .ms-lg-auto {
    margin-left: auto !important;
  }

  .m-lg-n1 {
    margin: -0.25rem !important;
  }

  .m-lg-n2 {
    margin: -0.5rem !important;
  }

  .m-lg-n3 {
    margin: -1rem !important;
  }

  .m-lg-n4 {
    margin: -1.5rem !important;
  }

  .m-lg-n5 {
    margin: -3rem !important;
  }

  .mx-lg-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-lg-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-lg-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-lg-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-lg-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-lg-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-lg-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-lg-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-lg-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-lg-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-lg-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-lg-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-lg-n3 {
    margin-top: -1rem !important;
  }

  .mt-lg-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-lg-n5 {
    margin-top: -3rem !important;
  }

  .me-lg-n1 {
    margin-right: -0.25rem !important;
  }

  .me-lg-n2 {
    margin-right: -0.5rem !important;
  }

  .me-lg-n3 {
    margin-right: -1rem !important;
  }

  .me-lg-n4 {
    margin-right: -1.5rem !important;
  }

  .me-lg-n5 {
    margin-right: -3rem !important;
  }

  .mb-lg-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-lg-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-lg-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-lg-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-lg-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-lg-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-lg-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-lg-n3 {
    margin-left: -1rem !important;
  }

  .ms-lg-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-lg-n5 {
    margin-left: -3rem !important;
  }

  .p-lg-0 {
    padding: 0 !important;
  }

  .p-lg-1 {
    padding: 0.25rem !important;
  }

  .p-lg-2 {
    padding: 0.5rem !important;
  }

  .p-lg-3 {
    padding: 1rem !important;
  }

  .p-lg-4 {
    padding: 1.5rem !important;
  }

  .p-lg-5 {
    padding: 3rem !important;
  }

  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-lg-0 {
    padding-top: 0 !important;
  }

  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }

  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }

  .pt-lg-3 {
    padding-top: 1rem !important;
  }

  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }

  .pt-lg-5 {
    padding-top: 3rem !important;
  }

  .pe-lg-0 {
    padding-right: 0 !important;
  }

  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }

  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }

  .pe-lg-3 {
    padding-right: 1rem !important;
  }

  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }

  .pe-lg-5 {
    padding-right: 3rem !important;
  }

  .pb-lg-0 {
    padding-bottom: 0 !important;
  }

  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }

  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }

  .ps-lg-0 {
    padding-left: 0 !important;
  }

  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }

  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }

  .ps-lg-3 {
    padding-left: 1rem !important;
  }

  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }

  .ps-lg-5 {
    padding-left: 3rem !important;
  }

  .text-lg-start {
    text-align: left !important;
  }

  .text-lg-end {
    text-align: right !important;
  }

  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }

  .float-xl-end {
    float: right !important;
  }

  .float-xl-none {
    float: none !important;
  }

  .d-xl-inline {
    display: inline !important;
  }

  .d-xl-inline-block {
    display: inline-block !important;
  }

  .d-xl-block {
    display: block !important;
  }

  .d-xl-grid {
    display: grid !important;
  }

  .d-xl-table {
    display: table !important;
  }

  .d-xl-table-row {
    display: table-row !important;
  }

  .d-xl-table-cell {
    display: table-cell !important;
  }

  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }

  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }

  .d-xl-none {
    display: none !important;
  }

  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }

  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }

  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }

  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }

  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }

  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }

  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }

  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }

  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }

  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }

  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }

  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }

  .gap-xl-0 {
    gap: 0 !important;
  }

  .gap-xl-1 {
    gap: 0.25rem !important;
  }

  .gap-xl-2 {
    gap: 0.5rem !important;
  }

  .gap-xl-3 {
    gap: 1rem !important;
  }

  .gap-xl-4 {
    gap: 1.5rem !important;
  }

  .gap-xl-5 {
    gap: 3rem !important;
  }

  .justify-content-xl-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }

  .justify-content-xl-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }

  .justify-content-xl-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }

  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }

  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }

  .justify-content-xl-evenly {
    -webkit-box-pack: space-evenly !important;
        -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
  }

  .align-items-xl-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }

  .align-items-xl-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }

  .align-items-xl-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }

  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }

  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }

  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }

  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }

  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }

  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }

  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }

  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }

  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }

  .align-self-xl-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }

  .align-self-xl-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }

  .align-self-xl-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }

  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }

  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }

  .order-xl-first {
    -webkit-box-ordinal-group: 0 !important;
        -ms-flex-order: -1 !important;
            order: -1 !important;
  }

  .order-xl-0 {
    -webkit-box-ordinal-group: 1 !important;
        -ms-flex-order: 0 !important;
            order: 0 !important;
  }

  .order-xl-1 {
    -webkit-box-ordinal-group: 2 !important;
        -ms-flex-order: 1 !important;
            order: 1 !important;
  }

  .order-xl-2 {
    -webkit-box-ordinal-group: 3 !important;
        -ms-flex-order: 2 !important;
            order: 2 !important;
  }

  .order-xl-3 {
    -webkit-box-ordinal-group: 4 !important;
        -ms-flex-order: 3 !important;
            order: 3 !important;
  }

  .order-xl-4 {
    -webkit-box-ordinal-group: 5 !important;
        -ms-flex-order: 4 !important;
            order: 4 !important;
  }

  .order-xl-5 {
    -webkit-box-ordinal-group: 6 !important;
        -ms-flex-order: 5 !important;
            order: 5 !important;
  }

  .order-xl-last {
    -webkit-box-ordinal-group: 7 !important;
        -ms-flex-order: 6 !important;
            order: 6 !important;
  }

  .m-xl-0 {
    margin: 0 !important;
  }

  .m-xl-1 {
    margin: 0.25rem !important;
  }

  .m-xl-2 {
    margin: 0.5rem !important;
  }

  .m-xl-3 {
    margin: 1rem !important;
  }

  .m-xl-4 {
    margin: 1.5rem !important;
  }

  .m-xl-5 {
    margin: 3rem !important;
  }

  .m-xl-auto {
    margin: auto !important;
  }

  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-xl-0 {
    margin-top: 0 !important;
  }

  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }

  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }

  .mt-xl-3 {
    margin-top: 1rem !important;
  }

  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }

  .mt-xl-5 {
    margin-top: 3rem !important;
  }

  .mt-xl-auto {
    margin-top: auto !important;
  }

  .me-xl-0 {
    margin-right: 0 !important;
  }

  .me-xl-1 {
    margin-right: 0.25rem !important;
  }

  .me-xl-2 {
    margin-right: 0.5rem !important;
  }

  .me-xl-3 {
    margin-right: 1rem !important;
  }

  .me-xl-4 {
    margin-right: 1.5rem !important;
  }

  .me-xl-5 {
    margin-right: 3rem !important;
  }

  .me-xl-auto {
    margin-right: auto !important;
  }

  .mb-xl-0 {
    margin-bottom: 0 !important;
  }

  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }

  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }

  .mb-xl-auto {
    margin-bottom: auto !important;
  }

  .ms-xl-0 {
    margin-left: 0 !important;
  }

  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }

  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }

  .ms-xl-3 {
    margin-left: 1rem !important;
  }

  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }

  .ms-xl-5 {
    margin-left: 3rem !important;
  }

  .ms-xl-auto {
    margin-left: auto !important;
  }

  .m-xl-n1 {
    margin: -0.25rem !important;
  }

  .m-xl-n2 {
    margin: -0.5rem !important;
  }

  .m-xl-n3 {
    margin: -1rem !important;
  }

  .m-xl-n4 {
    margin: -1.5rem !important;
  }

  .m-xl-n5 {
    margin: -3rem !important;
  }

  .mx-xl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-xl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-xl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-xl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-xl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-xl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-xl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-xl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-xl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-xl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-xl-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-xl-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-xl-n3 {
    margin-top: -1rem !important;
  }

  .mt-xl-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-xl-n5 {
    margin-top: -3rem !important;
  }

  .me-xl-n1 {
    margin-right: -0.25rem !important;
  }

  .me-xl-n2 {
    margin-right: -0.5rem !important;
  }

  .me-xl-n3 {
    margin-right: -1rem !important;
  }

  .me-xl-n4 {
    margin-right: -1.5rem !important;
  }

  .me-xl-n5 {
    margin-right: -3rem !important;
  }

  .mb-xl-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-xl-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-xl-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-xl-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-xl-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-xl-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-xl-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-xl-n3 {
    margin-left: -1rem !important;
  }

  .ms-xl-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-xl-n5 {
    margin-left: -3rem !important;
  }

  .p-xl-0 {
    padding: 0 !important;
  }

  .p-xl-1 {
    padding: 0.25rem !important;
  }

  .p-xl-2 {
    padding: 0.5rem !important;
  }

  .p-xl-3 {
    padding: 1rem !important;
  }

  .p-xl-4 {
    padding: 1.5rem !important;
  }

  .p-xl-5 {
    padding: 3rem !important;
  }

  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-xl-0 {
    padding-top: 0 !important;
  }

  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }

  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }

  .pt-xl-3 {
    padding-top: 1rem !important;
  }

  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }

  .pt-xl-5 {
    padding-top: 3rem !important;
  }

  .pe-xl-0 {
    padding-right: 0 !important;
  }

  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }

  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }

  .pe-xl-3 {
    padding-right: 1rem !important;
  }

  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }

  .pe-xl-5 {
    padding-right: 3rem !important;
  }

  .pb-xl-0 {
    padding-bottom: 0 !important;
  }

  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }

  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }

  .ps-xl-0 {
    padding-left: 0 !important;
  }

  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }

  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }

  .ps-xl-3 {
    padding-left: 1rem !important;
  }

  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }

  .ps-xl-5 {
    padding-left: 3rem !important;
  }

  .text-xl-start {
    text-align: left !important;
  }

  .text-xl-end {
    text-align: right !important;
  }

  .text-xl-center {
    text-align: center !important;
  }
}
@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }

  .float-xxl-end {
    float: right !important;
  }

  .float-xxl-none {
    float: none !important;
  }

  .d-xxl-inline {
    display: inline !important;
  }

  .d-xxl-inline-block {
    display: inline-block !important;
  }

  .d-xxl-block {
    display: block !important;
  }

  .d-xxl-grid {
    display: grid !important;
  }

  .d-xxl-table {
    display: table !important;
  }

  .d-xxl-table-row {
    display: table-row !important;
  }

  .d-xxl-table-cell {
    display: table-cell !important;
  }

  .d-xxl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }

  .d-xxl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }

  .d-xxl-none {
    display: none !important;
  }

  .flex-xxl-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }

  .flex-xxl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }

  .flex-xxl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }

  .flex-xxl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }

  .flex-xxl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }

  .flex-xxl-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }

  .flex-xxl-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }

  .flex-xxl-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }

  .flex-xxl-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }

  .flex-xxl-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }

  .flex-xxl-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }

  .flex-xxl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }

  .gap-xxl-0 {
    gap: 0 !important;
  }

  .gap-xxl-1 {
    gap: 0.25rem !important;
  }

  .gap-xxl-2 {
    gap: 0.5rem !important;
  }

  .gap-xxl-3 {
    gap: 1rem !important;
  }

  .gap-xxl-4 {
    gap: 1.5rem !important;
  }

  .gap-xxl-5 {
    gap: 3rem !important;
  }

  .justify-content-xxl-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }

  .justify-content-xxl-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }

  .justify-content-xxl-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }

  .justify-content-xxl-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }

  .justify-content-xxl-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }

  .justify-content-xxl-evenly {
    -webkit-box-pack: space-evenly !important;
        -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
  }

  .align-items-xxl-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }

  .align-items-xxl-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }

  .align-items-xxl-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }

  .align-items-xxl-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }

  .align-items-xxl-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }

  .align-content-xxl-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }

  .align-content-xxl-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }

  .align-content-xxl-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }

  .align-content-xxl-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }

  .align-content-xxl-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }

  .align-content-xxl-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }

  .align-self-xxl-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }

  .align-self-xxl-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }

  .align-self-xxl-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }

  .align-self-xxl-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }

  .align-self-xxl-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }

  .align-self-xxl-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }

  .order-xxl-first {
    -webkit-box-ordinal-group: 0 !important;
        -ms-flex-order: -1 !important;
            order: -1 !important;
  }

  .order-xxl-0 {
    -webkit-box-ordinal-group: 1 !important;
        -ms-flex-order: 0 !important;
            order: 0 !important;
  }

  .order-xxl-1 {
    -webkit-box-ordinal-group: 2 !important;
        -ms-flex-order: 1 !important;
            order: 1 !important;
  }

  .order-xxl-2 {
    -webkit-box-ordinal-group: 3 !important;
        -ms-flex-order: 2 !important;
            order: 2 !important;
  }

  .order-xxl-3 {
    -webkit-box-ordinal-group: 4 !important;
        -ms-flex-order: 3 !important;
            order: 3 !important;
  }

  .order-xxl-4 {
    -webkit-box-ordinal-group: 5 !important;
        -ms-flex-order: 4 !important;
            order: 4 !important;
  }

  .order-xxl-5 {
    -webkit-box-ordinal-group: 6 !important;
        -ms-flex-order: 5 !important;
            order: 5 !important;
  }

  .order-xxl-last {
    -webkit-box-ordinal-group: 7 !important;
        -ms-flex-order: 6 !important;
            order: 6 !important;
  }

  .m-xxl-0 {
    margin: 0 !important;
  }

  .m-xxl-1 {
    margin: 0.25rem !important;
  }

  .m-xxl-2 {
    margin: 0.5rem !important;
  }

  .m-xxl-3 {
    margin: 1rem !important;
  }

  .m-xxl-4 {
    margin: 1.5rem !important;
  }

  .m-xxl-5 {
    margin: 3rem !important;
  }

  .m-xxl-auto {
    margin: auto !important;
  }

  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-xxl-0 {
    margin-top: 0 !important;
  }

  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }

  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }

  .mt-xxl-3 {
    margin-top: 1rem !important;
  }

  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }

  .mt-xxl-5 {
    margin-top: 3rem !important;
  }

  .mt-xxl-auto {
    margin-top: auto !important;
  }

  .me-xxl-0 {
    margin-right: 0 !important;
  }

  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }

  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }

  .me-xxl-3 {
    margin-right: 1rem !important;
  }

  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }

  .me-xxl-5 {
    margin-right: 3rem !important;
  }

  .me-xxl-auto {
    margin-right: auto !important;
  }

  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }

  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }

  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }

  .mb-xxl-auto {
    margin-bottom: auto !important;
  }

  .ms-xxl-0 {
    margin-left: 0 !important;
  }

  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }

  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }

  .ms-xxl-3 {
    margin-left: 1rem !important;
  }

  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }

  .ms-xxl-5 {
    margin-left: 3rem !important;
  }

  .ms-xxl-auto {
    margin-left: auto !important;
  }

  .m-xxl-n1 {
    margin: -0.25rem !important;
  }

  .m-xxl-n2 {
    margin: -0.5rem !important;
  }

  .m-xxl-n3 {
    margin: -1rem !important;
  }

  .m-xxl-n4 {
    margin: -1.5rem !important;
  }

  .m-xxl-n5 {
    margin: -3rem !important;
  }

  .mx-xxl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-xxl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-xxl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-xxl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-xxl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-xxl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-xxl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-xxl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-xxl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-xxl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-xxl-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-xxl-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-xxl-n3 {
    margin-top: -1rem !important;
  }

  .mt-xxl-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-xxl-n5 {
    margin-top: -3rem !important;
  }

  .me-xxl-n1 {
    margin-right: -0.25rem !important;
  }

  .me-xxl-n2 {
    margin-right: -0.5rem !important;
  }

  .me-xxl-n3 {
    margin-right: -1rem !important;
  }

  .me-xxl-n4 {
    margin-right: -1.5rem !important;
  }

  .me-xxl-n5 {
    margin-right: -3rem !important;
  }

  .mb-xxl-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-xxl-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-xxl-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-xxl-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-xxl-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-xxl-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-xxl-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-xxl-n3 {
    margin-left: -1rem !important;
  }

  .ms-xxl-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-xxl-n5 {
    margin-left: -3rem !important;
  }

  .p-xxl-0 {
    padding: 0 !important;
  }

  .p-xxl-1 {
    padding: 0.25rem !important;
  }

  .p-xxl-2 {
    padding: 0.5rem !important;
  }

  .p-xxl-3 {
    padding: 1rem !important;
  }

  .p-xxl-4 {
    padding: 1.5rem !important;
  }

  .p-xxl-5 {
    padding: 3rem !important;
  }

  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-xxl-0 {
    padding-top: 0 !important;
  }

  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }

  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }

  .pt-xxl-3 {
    padding-top: 1rem !important;
  }

  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }

  .pt-xxl-5 {
    padding-top: 3rem !important;
  }

  .pe-xxl-0 {
    padding-right: 0 !important;
  }

  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }

  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }

  .pe-xxl-3 {
    padding-right: 1rem !important;
  }

  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }

  .pe-xxl-5 {
    padding-right: 3rem !important;
  }

  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }

  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }

  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }

  .ps-xxl-0 {
    padding-left: 0 !important;
  }

  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }

  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }

  .ps-xxl-3 {
    padding-left: 1rem !important;
  }

  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }

  .ps-xxl-5 {
    padding-left: 3rem !important;
  }

  .text-xxl-start {
    text-align: left !important;
  }

  .text-xxl-end {
    text-align: right !important;
  }

  .text-xxl-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.34375rem !important;
  }

  .fs-2 {
    font-size: 1.875rem !important;
  }

  .fs-3 {
    font-size: 1.640625rem !important;
  }

  .fs-4 {
    font-size: 1.40625rem !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }

  .d-print-inline-block {
    display: inline-block !important;
  }

  .d-print-block {
    display: block !important;
  }

  .d-print-grid {
    display: grid !important;
  }

  .d-print-table {
    display: table !important;
  }

  .d-print-table-row {
    display: table-row !important;
  }

  .d-print-table-cell {
    display: table-cell !important;
  }

  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }

  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }

  .d-print-none {
    display: none !important;
  }
}
.w-20px {
  width: 20px !important;
}

.w-30px {
  width: 30px !important;
}

.w-40px {
  width: 40px !important;
}

.w-50px {
  width: 50px !important;
}

.w-60px {
  width: 60px !important;
}

.w-70px {
  width: 70px !important;
}

.w-80px {
  width: 80px !important;
}

.w-90px {
  width: 90px !important;
}

.w-100px {
  width: 100px !important;
}

.w-150px {
  width: 150px !important;
}

.w-200px {
  width: 200px !important;
}

.w-300px {
  width: 300px !important;
}

.w-400px {
  width: 400px !important;
}

.h-20px {
  height: 20px !important;
}

.h-30px {
  height: 30px !important;
}

.h-40px {
  height: 40px !important;
}

.h-50px {
  height: 50px !important;
}

.h-60px {
  height: 60px !important;
}

.h-70px {
  height: 70px !important;
}

.h-80px {
  height: 80px !important;
}

.h-90px {
  height: 90px !important;
}

.h-100px {
  height: 100px !important;
}

.h-150px {
  height: 150px !important;
}

.h-200px {
  height: 200px !important;
}

.h-300px {
  height: 300px !important;
}

.h-400px {
  height: 400px !important;
}

.fill-primary {
  fill: #0f6fec !important;
}

.fill-secondary {
  fill: #c5c6cc !important;
}

.fill-success {
  fill: #0cbc87 !important;
}

.fill-info {
  fill: #4f9ef8 !important;
}

.fill-warning {
  fill: #f7c32e !important;
}

.fill-danger {
  fill: #d6293e !important;
}

.fill-light {
  fill: #202227 !important;
}

.fill-dark {
  fill: #0f0f10 !important;
}

.fill-white {
  fill: #fff !important;
}

.z-index-0 {
  z-index: 0 !important;
}

.z-index-1 {
  z-index: 1 !important;
}

.z-index-9 {
  z-index: 9 !important;
}

.z-index-99 {
  z-index: 99 !important;
}

.z-index-n9 {
  z-index: -9 !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-1 {
  opacity: 0.1 !important;
}

.opacity-2 {
  opacity: 0.2 !important;
}

.opacity-3 {
  opacity: 0.3 !important;
}

.opacity-4 {
  opacity: 0.4 !important;
}

.opacity-5 {
  opacity: 0.5 !important;
}

.opacity-6 {
  opacity: 0.6 !important;
}

.opacity-7 {
  opacity: 0.7 !important;
}

.opacity-8 {
  opacity: 0.8 !important;
}

.opacity-9 {
  opacity: 0.9 !important;
}

.blur-1 {
  -webkit-filter: blur(0.2rem) !important;
          filter: blur(0.2rem) !important;
}

.blur-2 {
  -webkit-filter: blur(0.4rem) !important;
          filter: blur(0.4rem) !important;
}

.blur-3 {
  -webkit-filter: blur(0.6rem) !important;
          filter: blur(0.6rem) !important;
}

.blur-4 {
  -webkit-filter: blur(0.8rem) !important;
          filter: blur(0.8rem) !important;
}

.blur-5 {
  -webkit-filter: blur(1rem) !important;
          filter: blur(1rem) !important;
}

.blur-6 {
  -webkit-filter: blur(1.2rem) !important;
          filter: blur(1.2rem) !important;
}

.blur-7 {
  -webkit-filter: blur(2rem) !important;
          filter: blur(2rem) !important;
}

.blur-8 {
  -webkit-filter: blur(5rem) !important;
          filter: blur(5rem) !important;
}

.blur-9 {
  -webkit-filter: blur(9rem) !important;
          filter: blur(9rem) !important;
}

.border-dashed {
  border-style: dashed !important;
}

.rounded-start-top-0 {
  border-top-left-radius: 0 !important;
}

.accordion.accordion-icon .accordion-item {
  -webkit-box-shadow: none;
          box-shadow: none;
  border-radius: 0.25rem;
  border: 1px solid rgba(255, 255, 255, 0.1);
}
.accordion.accordion-icon .accordion-header {
  position: relative;
}
.accordion.accordion-icon .accordion-header .accordion-button {
  background: transparent;
  font-size: inherit;
  -webkit-transition: none;
  transition: none;
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}
.accordion.accordion-icon .accordion-header .accordion-button[aria-expanded=true] {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.accordion.accordion-icon .accordion-header .accordion-button:after {
  content: "";
  background: #a1a1a8 !important;
  width: 10px;
  height: 2px;
  display: block;
  position: absolute;
  top: 47%;
  right: 20px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-transform: rotateZ(0deg);
          transform: rotateZ(0deg);
  z-index: 9;
}
.accordion.accordion-icon .accordion-header .accordion-button:before {
  content: "";
  background: #a1a1a8 !important;
  width: 10px;
  height: 2px;
  display: block;
  position: absolute;
  top: 47%;
  right: 20px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-transform: rotateZ(0deg);
          transform: rotateZ(0deg);
  z-index: 9;
}
.accordion.accordion-icon .accordion-header .accordion-button[aria-expanded=false]:after {
  -webkit-transform: rotateZ(90deg);
          transform: rotateZ(90deg);
}
.accordion.accordion-icon .accordion-header .accordion-button[aria-expanded=true]:before {
  -webkit-transform: rotateZ(0deg);
          transform: rotateZ(0deg);
}
.accordion.accordion-icon .accordion-collapse {
  border: none;
}
.accordion.accordion-icon .accordion-body {
  padding: 1rem;
}

.breadcrumb-item {
  font-size: 0.8125rem;
}
.breadcrumb-item a {
  color: #a1a1a8;
}
.breadcrumb-item a:hover {
  color: #0f6fec;
}

.breadcrumb.breadcrumb-dots .breadcrumb-item + .breadcrumb-item::before {
  content: "•";
  font-size: 22px;
  line-height: 0;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.btn-link {
  padding: 0;
}

.btn {
  outline: 0;
}

.input-group .btn {
  margin-bottom: 0;
}

.btn-xs {
  padding: 0.4rem 0.6rem;
  font-size: 0.6rem;
  line-height: 1.2;
  border-radius: 0.2rem;
}

.btn-light.active, .btn-light:active, .btn-light:focus, .btn-light:hover {
  background: #202227;
}

.btn-white {
  background: #fff;
  color: #191a1f;
}
.btn-white.active, .btn-white:active, .btn-white:focus, .btn-white:hover {
  background: #f0f1f3;
  color: #191a1f;
}

.btn-outline-light {
  background: transparent;
  border-color: #a1a1a8;
  color: #a1a1a8;
}

.btn-outline-light:hover,
.btn-outline-light:focus,
.btn-outline-light:active,
.btn-check:checked + .btn-outline-light {
  background: #a1a1a8;
  border-color: #a1a1a8;
  color: #191a1f;
}

.btn-primary-soft {
  color: #0f6fec;
  background-color: rgba(15, 111, 236, 0.1);
}
.btn-primary-soft:hover {
  color: #fff;
  background-color: #0f6fec;
}

.btn-secondary-soft {
  color: #c5c6cc;
  background-color: rgba(197, 198, 204, 0.1);
}
.btn-secondary-soft:hover {
  color: #000;
  background-color: #c5c6cc;
}

.btn-success-soft {
  color: #0cbc87;
  background-color: rgba(12, 188, 135, 0.1);
}
.btn-success-soft:hover {
  color: #fff;
  background-color: #0cbc87;
}

.btn-info-soft {
  color: #4f9ef8;
  background-color: rgba(79, 158, 248, 0.1);
}
.btn-info-soft:hover {
  color: #fff;
  background-color: #4f9ef8;
}

.btn-warning-soft {
  color: #f7c32e;
  background-color: rgba(247, 195, 46, 0.1);
}
.btn-warning-soft:hover {
  color: #000;
  background-color: #f7c32e;
}

.btn-danger-soft {
  color: #d6293e;
  background-color: rgba(214, 41, 62, 0.1);
}
.btn-danger-soft:hover {
  color: #fff;
  background-color: #d6293e;
}

.btn-light-soft {
  color: #202227;
  background-color: rgba(32, 34, 39, 0.1);
}
.btn-light-soft:hover {
  color: #fff;
  background-color: #202227;
}

.btn-dark-soft {
  color: #0f0f10;
  background-color: rgba(15, 15, 16, 0.1);
}
.btn-dark-soft:hover {
  color: #fff;
  background-color: #0f0f10;
}

.btn-primary-soft-hover:hover:hover {
  color: #0f6fec !important;
  background-color: rgba(15, 111, 236, 0.1);
}

.btn-secondary-soft-hover:hover:hover {
  color: #c5c6cc !important;
  background-color: rgba(197, 198, 204, 0.1);
}

.btn-success-soft-hover:hover:hover {
  color: #0cbc87 !important;
  background-color: rgba(12, 188, 135, 0.1);
}

.btn-info-soft-hover:hover:hover {
  color: #4f9ef8 !important;
  background-color: rgba(79, 158, 248, 0.1);
}

.btn-warning-soft-hover:hover:hover {
  color: #f7c32e !important;
  background-color: rgba(247, 195, 46, 0.1);
}

.btn-danger-soft-hover:hover:hover {
  color: #d6293e !important;
  background-color: rgba(214, 41, 62, 0.1);
}

.btn-light-soft-hover:hover:hover {
  color: #202227 !important;
  background-color: rgba(32, 34, 39, 0.1);
}

.btn-dark-soft-hover:hover:hover {
  color: #0f0f10 !important;
  background-color: rgba(15, 15, 16, 0.1);
}

.btn-dashed {
  background: -webkit-gradient(linear, left top, right top, color-stop(50%, rgba(255, 255, 255, 0.1)), color-stop(50%, transparent)), -webkit-gradient(linear, left bottom, left top, color-stop(50%, rgba(255, 255, 255, 0.1)), color-stop(50%, transparent)), -webkit-gradient(linear, left top, right top, color-stop(50%, rgba(255, 255, 255, 0.1)), color-stop(50%, transparent)), -webkit-gradient(linear, left bottom, left top, color-stop(50%, rgba(255, 255, 255, 0.1)), color-stop(50%, transparent));
  background: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 50%, transparent 50%), linear-gradient(0deg, rgba(255, 255, 255, 0.1) 50%, transparent 50%), linear-gradient(90deg, rgba(255, 255, 255, 0.1) 50%, transparent 50%), linear-gradient(0deg, rgba(255, 255, 255, 0.1) 50%, transparent 50%);
  background-repeat: repeat-x, repeat-y, repeat-x, repeat-y;
  background-size: 10px 2px, 2px 10px, 10px 2px, 2px 10px;
  background-position: left top, right top, left bottom, left top;
  padding: 0.5rem, 1rem;
}
.btn-dashed:hover {
  -webkit-animation: border-dance 4s infinite linear;
          animation: border-dance 4s infinite linear;
}

@-webkit-keyframes border-dance {
  0% {
    background-position: left top, right top, right bottom, left bottom;
  }
  100% {
    background-position: right top, right bottom, left bottom, left top;
  }
}

@keyframes border-dance {
  0% {
    background-position: left top, right top, right bottom, left bottom;
  }
  100% {
    background-position: right top, right bottom, left bottom, left top;
  }
}
.btn-loader {
  position: relative;
  text-align: center;
}
.btn-loader .load-icon {
  display: none;
  margin: 0 auto;
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.btn-loader .load-text {
  opacity: 1;
  visibility: visible;
}

.btn-loader.active .load-text {
  opacity: 0;
  visibility: hidden;
}
.btn-loader.active .load-icon {
  display: block;
}

.spinner-dots {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.spinner-dot {
  background-color: #464950;
  display: inline-block;
  height: 4px;
  margin: 2px;
  border-radius: 50%;
  width: 4px;
}

@-webkit-keyframes dot {
  0% {
    background-color: #464950;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    background-color: #c5c6cc;
    -webkit-transform: scale(1.3);
            transform: scale(1.3);
  }
  100% {
    background-color: #464950;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes dot {
  0% {
    background-color: #464950;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    background-color: #c5c6cc;
    -webkit-transform: scale(1.3);
            transform: scale(1.3);
  }
  100% {
    background-color: #464950;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
.btn-link-loader.active .spinner-dots .spinner-dot {
  -webkit-animation: dot ease-in-out 1s infinite;
          animation: dot ease-in-out 1s infinite;
}
.btn-link-loader.active .spinner-dots .spinner-dot:nth-of-type(2) {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.btn-link-loader.active .spinner-dots .spinner-dot:nth-of-type(3) {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}

.card.overflow-hidden {
  will-change: transform;
}

.card .card-image {
  position: relative;
}
.card .card-image .card-element-hover {
  visibility: hidden;
  margin-top: 20px;
  opacity: 0;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 9;
}
.card:hover .card-image .card-element-hover {
  visibility: visible;
  margin-top: 0px;
  opacity: 1;
}

.card.card-overlay-bottom {
  overflow: hidden;
}
.card.card-overlay-bottom:before {
  content: "";
  position: absolute;
  height: 50%;
  width: 100%;
  bottom: 0;
  left: 0;
  right: 0;
  background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), to(black));
  background-image: linear-gradient(180deg, transparent, black);
  z-index: 1;
}
.card .card-img-overlay {
  z-index: 2;
}

.dropdown-menu {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.dropdown-item.active {
  color: #0f6fec;
}

.dropdown-toggle:after {
  content: "\f078";
  font-family: "Font Awesome 5 Free";
  font-size: 0.5rem;
  margin-left: 0.35rem;
  font-weight: 900;
  vertical-align: middle;
  border: none;
}

.dropup .dropdown-toggle:after {
  content: "\f077";
  font-family: "Font Awesome 5 Free";
  font-size: 0.7rem;
  margin-left: 0.35rem;
  font-weight: 900;
  vertical-align: middle;
  border: none;
}

.dropdown-menu .dropdown-toggle:after {
  position: absolute;
  right: 25px;
  top: 10px;
}
.dropdown-menu .dropdown-toggle:before {
  position: absolute;
  right: 25px;
  top: 10px;
}

.dropdown-menu-size-md {
  min-width: 22rem;
}

@media (max-width: 575.98px) {
  .dropdown-menu-size-md {
    min-width: 16rem;
  }
}
.list-group-borderless .list-group-item {
  border: none;
  padding: 0.425rem 0;
}
.list-group-borderless a.list-group-item:hover {
  background-color: transparent;
  color: #0f6fec;
}

.nav .nav-item .nav-link.active {
  color: #0f6fec;
}

.nav-pills .nav-link {
  cursor: pointer;
  margin-bottom: 15px;
  padding: 0.5rem 1rem;
}

.nav-pills.nav-pills-light .nav-link:hover {
  background-color: #1f2125;
}
.nav-pills.nav-pills-light .nav-link.active {
  background-color: #1f2125;
}

.nav-pills-soft .nav-link.active,
.nav-pills-soft .show > .nav-link {
  background-color: rgba(15, 111, 236, 0.1);
}

.nav.nav-bottom-line {
  border-bottom: solid 1px rgba(255, 255, 255, 0.1);
}
.nav.nav-bottom-line .nav-link {
  border: transparent;
  font-weight: 600;
  padding: 0.75rem 0.975rem;
}
.nav.nav-bottom-line .nav-item:first-child .nav-link {
  padding-left: 0;
}
.nav.nav-bottom-line .nav-link {
  background: transparent;
  border-bottom: 3px solid transparent;
}
.nav.nav-bottom-line .nav-link.active {
  background: transparent;
  color: #0f6fec;
  border-bottom: 3px solid #0f6fec;
}
.nav.nav-bottom-line .nav-item {
  margin-bottom: -2px;
}

.nav.flex-column:not(.nav-pills) .nav-link {
  padding-left: 0;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}

.tab-content {
  padding: 25px 0;
  margin-bottom: 20px;
}

.nav-tabs .nav-link {
  padding: 0.5rem 1rem;
}
.nav-tabs-white {
  border-radius: 0.4rem;
}
.nav-tabs-white .nav-item .nav-link {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  border: 0;
  border-radius: 0.4rem;
  margin-right: 4px;
  font-weight: 600;
}
.nav-tabs-white .nav-item:last-child .nav-link {
  margin-right: 0;
}
.nav-tabs-white .nav-item .nav-link.active, .nav-tabs-white .nav-item .nav-link:hover {
  background: #0f0f10;
  color: #0f6fec;
}

.nav.nav-divider .nav-item + .nav-item:before {
  content: "•";
  color: inherit;
  padding-left: 0.6rem;
  padding-right: 0.6rem;
  opacity: 0.8;
}
.nav.nav-divider .nav-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.nav.nav-divider .nav-link {
  padding: 0;
}

.nav-link-secondary .nav-item .nav-link {
  color: #fff;
}
.nav-link-secondary .nav-item .nav-link:hover, .nav-link-secondary .nav-item .nav-link.active {
  color: #0f6fec;
}

.nav-stack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-item-align: stretch;
      align-self: stretch;
  gap: 0.7rem;
}
.nav-stack .nav-link {
  padding-left: 0;
  padding-right: 0;
}

.nav .nav-item .nav-link .nav-icon {
  background: #202227;
  height: 2.1rem;
  width: 2.1rem;
  font-size: 1.1em;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  border-radius: 50%;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.nav .nav-item .nav-link:hover .nav-icon {
  background: #0f6fec;
  color: #fff;
}

@media (min-width: 992px) {
  .nav-sidenav {
    width: 5rem;
    -webkit-transition: width 0.3s;
    transition: width 0.3s;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 9;
    margin-top: 56px;
  }
  .nav-sidenav .nav-link {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    white-space: nowrap;
    padding-left: 0;
  }
  .nav-sidenav .nav-text {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }

  .sidebar-start-enabled .nav-sidenav {
    width: 270px;
  }
  .sidebar-start-enabled .nav-sidenav .nav-text {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    opacity: 1;
    visibility: visible;
    padding-left: 10px;
  }
}
@media (max-width: 991.98px) {
  .nav-sidenav {
    width: 270px;
    left: 0;
    -webkit-transition: -webkit-transform 0.3s ease-in-out;
    transition: -webkit-transform 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
    position: fixed;
    top: 0;
    z-index: 9;
    margin-top: 56px;
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  .nav-sidenav .nav-text {
    padding-left: 10px;
  }

  .sidebar-start-enabled .nav-sidenav {
    -webkit-transform: none;
            transform: none;
  }
}
@media (min-width: 992px) {
  .sidebar-end {
    width: 5rem;
    -webkit-transition: width 0.3s;
    transition: width 0.3s;
    position: fixed;
    right: 0;
    top: 0;
    margin-top: 56px;
    z-index: 9;
  }
  .sidebar-end .sidebar-end-alignment {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .sidebar-end .nav-link {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .sidebar-end .contact-name, .sidebar-end .contact-search, .sidebar-end .contact-title, .sidebar-end .contact-status {
    opacity: 0;
    display: none;
    visibility: hidden;
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    white-space: nowrap;
  }

  .sidebar-end-enabled .sidebar-end {
    width: 270px;
  }
  .sidebar-end-enabled .sidebar-end .sidebar-end-alignment {
    -webkit-box-align: inherit;
        -ms-flex-align: inherit;
            align-items: inherit;
  }
  .sidebar-end-enabled .sidebar-end .contact-name, .sidebar-end-enabled .sidebar-end .contact-search, .sidebar-end-enabled .sidebar-end .contact-title, .sidebar-end-enabled .sidebar-end .contact-status {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    opacity: 1;
    visibility: visible;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }
}
@media (max-width: 991.98px) {
  .sidebar-end {
    width: 270px;
    right: 0;
    -webkit-transition: -webkit-transform 0.3s ease-in-out;
    transition: -webkit-transform 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
    position: fixed;
    top: 0;
    z-index: 9;
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }

  .sidebar-end-enabled .sidebar-end {
    -webkit-transform: none;
            transform: none;
  }
}
header {
  height: 56px;
}

.navbar-nav .nav-link {
  font-size: 0.9375rem;
  font-weight: 600;
  text-transform: capitalize;
  line-height: 56px;
  padding-top: 0;
  padding-bottom: 0;
}
.navbar-nav .nav-link .nav-icon {
  margin-right: 0.3rem;
}
.navbar-nav .nav-item:last-child .nav-link {
  padding-right: 0;
}

.offcanvas .navbar-nav .nav-link {
  line-height: inherit;
  padding: 0.25rem 0.75rem;
}

.navbar-toggler {
  margin-bottom: 0;
  border: 0;
  background-color: #202227;
}

.navbar-transparent {
  background: transparent;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}

.navbar-dark .navbar-top span:not(.dropdown-item-text) {
  color: #fff;
}
.navbar-dark .navbar-top a:not(.dropdown-item) {
  color: #fff;
}
.navbar-dark .navbar-top a:not(.dropdown-item):hover {
  color: #0f6fec;
}

.navbar-dark .nav .nav-link {
  color: #fff;
}
.navbar-dark .nav .nav-link:hover {
  color: #0f6fec;
}

@media (max-width: 991.98px) {
  .navbar-dark .navbar-nav .nav-link {
    color: #c5c6cc;
  }
}
.navbar-brand {
  padding-top: 10px;
  padding-bottom: 10px;
}
.navbar-brand .navbar-brand-item {
  height: 36px;
  display: block;
  width: auto;
}

@media (max-width: 991.98px) {
  .navbar-brand {
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .navbar-brand .navbar-brand-item {
    height: 36px;
  }
}
.navbar .dropdown-menu .dropdown-submenu.dropend .dropdown-toggle:after {
  content: "\f00d";
  font-family: "Font Awesome 5 Free";
  font-size: 10px;
  top: 10px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  border: none !important;
  margin: 0;
}

@media (hover: hover) {
  .navbar .dropdown-menu .dropdown-submenu.dropend:hover > .dropdown-toggle:after {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
  }
}
.navbar .dropdown-menu .dropdown-submenu.dropend .dropdown-opened.dropdown-toggle:after {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.navbar .dropdown-menu .dropdown-submenu.dropstart .dropdown-toggle:before {
  content: "\f00d";
  font-family: "Font Awesome 5 Free";
  font-size: 10px;
  top: 8px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  border: none !important;
  margin: 0;
  font-weight: 900;
}

.navbar .dropdown-menu .dropdown-submenu.dropstart:hover > .dropdown-toggle:before {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

@media (min-width: 576px) {
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    opacity: 0;
    display: block;
    -webkit-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
  }
  .navbar-expand-sm .navbar-nav .dropdown:hover > .dropdown-menu {
    top: 100%;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-sm .navbar-nav .dropdown-submenu:hover > .dropdown-menu {
    top: 0;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-sm .dropdown-submenu {
    position: relative;
  }
}
@media (max-width: 575.98px) {
  .navbar-expand-sm .navbar-collapse {
    -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
            box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
    position: absolute;
    left: 0;
    right: 0;
    top: 100%;
    background: #0f0f10;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  .navbar-expand-sm .navbar-collapse .navbar-nav .dropdown-toggle::after {
    position: absolute;
    right: 25px;
  }
  .navbar-expand-sm .navbar-collapse .navbar-nav .dropdown-menu {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-expand-sm .navbar-collapse .navbar-nav .dropdown-menu:before {
    content: none;
  }
  .navbar-expand-sm .navbar-collapse .navbar-nav .dropdown-submenu .dropdown-menu {
    padding-left: 20px;
    padding-bottom: 0px;
  }
  .navbar-expand-sm .navbar-collapse .navbar-nav > .nav-item {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 5px 30px;
    position: relative;
  }
  .navbar-expand-sm .navbar-collapse .navbar-nav > .nav-item .nav-link {
    line-height: 40px;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: static;
    float: none;
  }
  .navbar-expand-sm .navbar-nav .nav-item > .dropdown-menu {
    background: rgba(161, 161, 168, 0.04);
    padding: 20px 0px;
    margin: 10px 0;
  }
  .navbar-expand-sm .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
    background: rgba(161, 161, 168, 0.06);
    padding: 10px 0px !important;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    opacity: 0;
    display: block;
    -webkit-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
  }
  .navbar-expand-md .navbar-nav .dropdown:hover > .dropdown-menu {
    top: 100%;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-md .navbar-nav .dropdown-submenu:hover > .dropdown-menu {
    top: 0;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-md .dropdown-submenu {
    position: relative;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md .navbar-collapse {
    -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
            box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
    position: absolute;
    left: 0;
    right: 0;
    top: 100%;
    background: #0f0f10;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  .navbar-expand-md .navbar-collapse .navbar-nav .dropdown-toggle::after {
    position: absolute;
    right: 25px;
  }
  .navbar-expand-md .navbar-collapse .navbar-nav .dropdown-menu {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-expand-md .navbar-collapse .navbar-nav .dropdown-menu:before {
    content: none;
  }
  .navbar-expand-md .navbar-collapse .navbar-nav .dropdown-submenu .dropdown-menu {
    padding-left: 20px;
    padding-bottom: 0px;
  }
  .navbar-expand-md .navbar-collapse .navbar-nav > .nav-item {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 5px 30px;
    position: relative;
  }
  .navbar-expand-md .navbar-collapse .navbar-nav > .nav-item .nav-link {
    line-height: 40px;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: static;
    float: none;
  }
  .navbar-expand-md .navbar-nav .nav-item > .dropdown-menu {
    background: rgba(161, 161, 168, 0.04);
    padding: 20px 0px;
    margin: 10px 0;
  }
  .navbar-expand-md .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
    background: rgba(161, 161, 168, 0.06);
    padding: 10px 0px !important;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    opacity: 0;
    display: block;
    -webkit-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
  }
  .navbar-expand-lg .navbar-nav .dropdown:hover > .dropdown-menu {
    top: 100%;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-lg .navbar-nav .dropdown-submenu:hover > .dropdown-menu {
    top: 0;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-lg .dropdown-submenu {
    position: relative;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg .navbar-collapse {
    -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
            box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
    position: absolute;
    left: 0;
    right: 0;
    top: 100%;
    background: #0f0f10;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  .navbar-expand-lg .navbar-collapse .navbar-nav .dropdown-toggle::after {
    position: absolute;
    right: 25px;
  }
  .navbar-expand-lg .navbar-collapse .navbar-nav .dropdown-menu {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-expand-lg .navbar-collapse .navbar-nav .dropdown-menu:before {
    content: none;
  }
  .navbar-expand-lg .navbar-collapse .navbar-nav .dropdown-submenu .dropdown-menu {
    padding-left: 20px;
    padding-bottom: 0px;
  }
  .navbar-expand-lg .navbar-collapse .navbar-nav > .nav-item {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 5px 30px;
    position: relative;
  }
  .navbar-expand-lg .navbar-collapse .navbar-nav > .nav-item .nav-link {
    line-height: 40px;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: static;
    float: none;
  }
  .navbar-expand-lg .navbar-nav .nav-item > .dropdown-menu {
    background: rgba(161, 161, 168, 0.04);
    padding: 20px 0px;
    margin: 10px 0;
  }
  .navbar-expand-lg .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
    background: rgba(161, 161, 168, 0.06);
    padding: 10px 0px !important;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    opacity: 0;
    display: block;
    -webkit-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
  }
  .navbar-expand-xl .navbar-nav .dropdown:hover > .dropdown-menu {
    top: 100%;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-xl .navbar-nav .dropdown-submenu:hover > .dropdown-menu {
    top: 0;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-xl .dropdown-submenu {
    position: relative;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl .navbar-collapse {
    -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
            box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
    position: absolute;
    left: 0;
    right: 0;
    top: 100%;
    background: #0f0f10;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  .navbar-expand-xl .navbar-collapse .navbar-nav .dropdown-toggle::after {
    position: absolute;
    right: 25px;
  }
  .navbar-expand-xl .navbar-collapse .navbar-nav .dropdown-menu {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-expand-xl .navbar-collapse .navbar-nav .dropdown-menu:before {
    content: none;
  }
  .navbar-expand-xl .navbar-collapse .navbar-nav .dropdown-submenu .dropdown-menu {
    padding-left: 20px;
    padding-bottom: 0px;
  }
  .navbar-expand-xl .navbar-collapse .navbar-nav > .nav-item {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 5px 30px;
    position: relative;
  }
  .navbar-expand-xl .navbar-collapse .navbar-nav > .nav-item .nav-link {
    line-height: 40px;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: static;
    float: none;
  }
  .navbar-expand-xl .navbar-nav .nav-item > .dropdown-menu {
    background: rgba(161, 161, 168, 0.04);
    padding: 20px 0px;
    margin: 10px 0;
  }
  .navbar-expand-xl .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
    background: rgba(161, 161, 168, 0.06);
    padding: 10px 0px !important;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    opacity: 0;
    display: block;
    -webkit-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
  }
  .navbar-expand-xxl .navbar-nav .dropdown:hover > .dropdown-menu {
    top: 100%;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-submenu:hover > .dropdown-menu {
    top: 0;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .navbar-expand-xxl .dropdown-submenu {
    position: relative;
  }
}
@media (max-width: 1399.98px) {
  .navbar-expand-xxl .navbar-collapse {
    -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
            box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
    position: absolute;
    left: 0;
    right: 0;
    top: 100%;
    background: #0f0f10;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  .navbar-expand-xxl .navbar-collapse .navbar-nav .dropdown-toggle::after {
    position: absolute;
    right: 25px;
  }
  .navbar-expand-xxl .navbar-collapse .navbar-nav .dropdown-menu {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-expand-xxl .navbar-collapse .navbar-nav .dropdown-menu:before {
    content: none;
  }
  .navbar-expand-xxl .navbar-collapse .navbar-nav .dropdown-submenu .dropdown-menu {
    padding-left: 20px;
    padding-bottom: 0px;
  }
  .navbar-expand-xxl .navbar-collapse .navbar-nav > .nav-item {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 5px 30px;
    position: relative;
  }
  .navbar-expand-xxl .navbar-collapse .navbar-nav > .nav-item .nav-link {
    line-height: 40px;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: static;
    float: none;
  }
  .navbar-expand-xxl .navbar-nav .nav-item > .dropdown-menu {
    background: rgba(161, 161, 168, 0.04);
    padding: 20px 0px;
    margin: 10px 0;
  }
  .navbar-expand-xxl .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
    background: rgba(161, 161, 168, 0.06);
    padding: 10px 0px !important;
  }
}
.navbar-expand .navbar-nav .dropdown-menu {
  top: 120%;
  visibility: hidden;
  opacity: 0;
  display: block;
  -webkit-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
}
.navbar-expand .navbar-nav .dropdown:hover > .dropdown-menu {
  top: 100%;
  visibility: visible;
  opacity: 1;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.navbar-expand .navbar-nav .dropdown-submenu:hover > .dropdown-menu {
  top: 0;
  visibility: visible;
  opacity: 1;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.navbar-expand .dropdown-submenu {
  position: relative;
}
.navbar-expand .navbar-collapse {
  -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
          box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.2);
  position: absolute;
  left: 0;
  right: 0;
  top: 100%;
  background: #0f0f10;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}
.navbar-expand .navbar-collapse .navbar-nav .dropdown-toggle::after {
  position: absolute;
  right: 25px;
}
.navbar-expand .navbar-collapse .navbar-nav .dropdown-menu {
  -webkit-box-shadow: none;
          box-shadow: none;
}
.navbar-expand .navbar-collapse .navbar-nav .dropdown-menu:before {
  content: none;
}
.navbar-expand .navbar-collapse .navbar-nav .dropdown-submenu .dropdown-menu {
  padding-left: 20px;
  padding-bottom: 0px;
}
.navbar-expand .navbar-collapse .navbar-nav > .nav-item {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding: 5px 30px;
  position: relative;
}
.navbar-expand .navbar-collapse .navbar-nav > .nav-item .nav-link {
  line-height: 40px;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: static;
  float: none;
}
.navbar-expand .navbar-nav .nav-item > .dropdown-menu {
  background: rgba(161, 161, 168, 0.04);
  padding: 20px 0px;
  margin: 10px 0;
}
.navbar-expand .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
  background: rgba(161, 161, 168, 0.06);
  padding: 10px 0px !important;
}

.navbar.navbar-icon .navbar-nav .nav-item {
  position: relative;
  padding-top: 0;
  padding-bottom: 0;
}
.navbar.navbar-icon .navbar-nav .nav-item .nav-link {
  font-size: 1.3rem;
  color: #c5c6cc;
  padding: 0 1.2rem;
  margin-right: 0.5rem;
  margin-left: 0.5rem;
  position: relative;
}
.navbar.navbar-icon .navbar-nav .nav-item .nav-link:hover {
  color: #0f6fec;
  -webkit-box-shadow: inset 0px 4px 0px #0f6fec;
          box-shadow: inset 0px 4px 0px #0f6fec;
}
.navbar.navbar-icon .navbar-nav .nav-item .nav-link.active {
  color: #0f6fec;
  -webkit-box-shadow: inset 0px 4px 0px #0f6fec;
          box-shadow: inset 0px 4px 0px #0f6fec;
}
.navbar.navbar-icon .navbar-nav .nav-item .nav-link.active:before {
  position: absolute;
  top: 100%;
  width: 0;
  height: 0;
  content: "";
  border-style: solid;
  border-width: 10px 10px 0 10px;
  border-color: #0f0f10 transparent transparent transparent;
}
.navbar.navbar-icon .navbar-nav .nav-item .nav-link:last-child {
  padding-right: 1.2rem;
}
.navbar.navbar-icon .navbar-nav .nav-item .notif-badge {
  width: 6px;
  height: 6px;
  background: #d6293e;
  border-radius: 50%;
  position: absolute;
  top: inherit;
  bottom: 10px;
  right: 0;
  left: 0;
  margin: 0 auto;
  z-index: 1;
}
@media (min-width: 992px) {
  .navbar.navbar-icon .navbar-nav .nav-item .nav-link .nav-text {
    display: none;
  }
}
@media (max-width: 991.98px) {
  .navbar.navbar-icon .navbar-collapse {
    width: 100%;
    margin: 0 auto;
    text-align: center;
  }
  .navbar.navbar-icon .navbar-collapse .navbar-nav .nav-item {
    padding: 0 10px;
  }
  .navbar.navbar-icon .navbar-collapse .navbar-nav .nav-item .nav-link {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    font-size: 1rem;
    padding: 0.2rem 1.2rem;
  }
  .navbar.navbar-icon .navbar-collapse .navbar-nav .nav-item .nav-link::before {
    display: none;
  }
  .navbar.navbar-icon .navbar-collapse .navbar-nav .nav-item .nav-link .nav-text {
    margin-left: 0.4rem;
  }
  .navbar.navbar-icon .navbar-collapse .navbar-nav .nav-item .nav-link .badge-notif.badge-notif-bottom {
    position: static;
    margin: inherit;
  }
  .navbar.navbar-icon .navbar-collapse .navbar-nav .nav-item .notif-badge {
    bottom: inherit;
    right: inherit;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
  }
}

@media (min-width: 992px) {
  .navbar-vertical {
    bottom: 0;
    display: block;
    max-width: 300px;
    position: fixed;
    z-index: 9;
    height: 100vh;
    top: 56px;
    width: 100%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
  }
  .navbar-vertical .offcanvas-start {
    top: 1.5rem;
    left: inherit;
    position: relative;
    width: auto;
    border: none !important;
    -webkit-transform: none;
            transform: none;
    height: calc(100% - 6rem);
    visibility: visible !important;
  }

  .navbar-vertical + .page-content {
    margin-left: calc(300px + 1.5rem);
  }

  .page-content {
    position: relative;
    height: 100%;
    display: block;
    padding: 0 0.7rem 0 0;
  }
}
header.fixed-top + main {
  padding-top: calc(1.5rem + 56px);
  margin-bottom: 1.5rem;
}

.navbar-toggler .navbar-toggler-animation {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-image: none;
  position: relative;
  height: 18px;
  width: 20px;
  display: inline-block;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-toggler .navbar-toggler-animation span {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-transform: rotateZ(0deg);
  transform: rotateZ(0deg);
  height: 2px;
  background: #a1a1a8;
  display: block;
  position: absolute;
  width: 100%;
  border-radius: 30px;
}

.navbar-toggler .navbar-toggler-animation span:nth-child(1) {
  top: 10%;
}

.navbar-toggler .navbar-toggler-animation span:nth-child(2) {
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.navbar-toggler .navbar-toggler-animation span:nth-child(3) {
  bottom: 10%;
}

.navbar-toggler[data-bs-toggle=collapse][aria-expanded=true] .navbar-toggler-animation span:nth-child(1) {
  -webkit-transform: rotateZ(45deg) translateY(-50%);
          transform: rotateZ(45deg) translateY(-50%);
  top: 47%;
  -webkit-transform-origin: 47% 0;
          transform-origin: 47% 0;
  width: 100%;
}

.navbar-toggler[data-bs-toggle=collapse][aria-expanded=true] .navbar-toggler-animation span:nth-child(2) {
  visibility: hidden;
  -webkit-transition: all 0s ease-in-out;
  transition: all 0s ease-in-out;
}

.navbar-toggler[data-bs-toggle=collapse][aria-expanded=true] .navbar-toggler-animation span:nth-child(3) {
  -webkit-transform: rotateZ(-45deg) translateY(-50%);
          transform: rotateZ(-45deg) translateY(-50%);
  bottom: 42%;
  -webkit-transform-origin: 50% 0;
          transform-origin: 50% 0;
  width: 100%;
}

.pagination .page-item {
  margin-bottom: 5px;
  float: left;
}

.pagination-light .page-item {
  margin: 2px;
}
.pagination-light .page-link {
  border-color: #202227;
  background-color: #202227;
  border-radius: 0.2rem;
}
.pagination-light .page-link:hover {
  background-color: #0f6fec;
  border-color: #0f6fec;
}

body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  height: 100%;
  overflow-x: hidden;
  z-index: 0;
  position: relative;
}

main {
  background-color: #191a1f;
}

header {
  position: relative;
  z-index: 1020;
}

a {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

*:focus {
  outline: none !important;
}

h1 > a, h2 > a, h3 > a, h4 > a, h5 > a, h6 > a, .h1 > a, .h2 > a, .h3 > a, .h4 > a, .h5 > a, .h6 > a {
  color: #fff;
}
h1 > a:hover, h2 > a:hover, h3 > a:hover, h4 > a:hover, h5 > a:hover, h6 > a:hover, .h1 > a:hover, .h2 > a:hover, .h3 > a:hover, .h4 > a:hover, .h5 > a:hover, .h6 > a:hover {
  color: #0f6fec;
}

img {
  max-width: 100%;
  height: auto;
}

video {
  background-size: cover;
  display: table-cell;
  vertical-align: middle;
  width: 100%;
}

section {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

@media (max-width: 767.98px) {
  section {
    padding-top: 4rem;
    padding-bottom: 3rem;
  }
}
small,
.small {
  font-weight: 400;
}

.smaller {
  font-size: 60%;
  font-weight: 500;
}

.dropcap {
  font-size: 4em;
  font-weight: bold;
  display: block;
  float: left;
  margin: 0.04em 0.2em 0 0;
  color: #fff;
  line-height: 1;
}

.bg-overlay {
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.blockquote {
  position: relative;
  padding-left: 80px;
}
.blockquote:before {
  content: '"';
  position: absolute;
  top: 0;
  left: 0;
  font-size: 8rem;
  line-height: 0.8em;
  font-weight: 700;
  color: #0f6fec;
}

.blockquote-footer {
  margin-top: 12px;
  padding-left: 80px;
}

a.badge:hover {
  color: #fff;
}

.badge-unread {
  background: #202227;
}
.badge-unread:hover {
  background: #202227;
}
.badge-unread:before {
  content: "";
  width: 7px;
  height: 7px;
  background: #0f6fec;
  border-radius: 50%;
  position: absolute;
  top: 40px;
  left: 4px;
}

.badge-notif {
  width: 8px;
  height: 8px;
  background: #d6293e;
  border-radius: 50%;
  position: absolute;
  top: 0;
  right: -3px;
  z-index: 1;
}
.badge-notif.badge-notif-bottom {
  width: 6px;
  height: 6px;
  top: inherit;
  bottom: 5px;
  left: 0;
  right: 0;
  margin: 0 auto;
}

.offcanvas-sm {
  width: 270px;
}

@media (max-width: 767.98px) {
  .offcanvas-start {
    width: 260px;
  }
}
.toast-chat {
  position: fixed;
  right: calc(400px + 1rem);
  bottom: 0;
  z-index: 11;
}

@media (max-width: 575.98px) {
  .toast {
    width: 288px;
  }
}
.bg-mode {
  background: #0f0f10;
}

.grayscale {
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
.grayscale:hover {
  filter: none;
  -webkit-filter: grayscale(0%);
}

.fw-icon {
  text-align: center;
  width: 1.25em;
  display: inline-block;
}

.icon-xs {
  height: 1.5rem;
  width: 1.5rem;
  font-size: 0.6em;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.icon-sm {
  height: 2rem;
  width: 2rem;
  font-size: 0.7em;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.icon-md {
  height: 2.5rem;
  width: 2.5rem;
  font-size: 0.9em;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.icon-lg {
  height: 3rem;
  width: 3rem;
  font-size: 1em;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.icon-xl {
  height: 4rem;
  width: 4rem;
  font-size: 1.6em;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.icon-xxl {
  height: 5.125rem;
  width: 5.125rem;
  font-size: 2em;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.plyr__control--overlaid,
.plyr--video .plyr__control.plyr__tab-focus,
.plyr--video .plyr__control:hover,
.plyr--video .plyr__control[aria-expanded=true] {
  background: #0f6fec;
}

.plyr--full-ui input[type=range] {
  color: #0f6fec;
}

/* rtl:raw:
.glightbox-clean .gclose, .glightbox-modern .gclose{
  right: auto !important;
  left: 20px;
}
*/
.password-strength-meter {
  background-color: #30343c !important;
}

.glightbox-clean .gslide-description {
  background: #0f0f10;
}

.plyr__controls-none .plyr__controls {
  display: none;
}
.plyr__controls-none .plyr--video {
  border-radius: 20px;
}

.nav-search .dropdown-menu {
  top: 120%;
  visibility: hidden;
  opacity: 0;
  display: block;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 300px;
  left: auto;
  right: 0;
}

.nav-search .dropdown-menu.show {
  top: 100%;
  visibility: visible;
  opacity: 1;
}

@media (max-width: 575.98px) {
  .nav-search .dropdown-menu {
    width: 100%;
  }
}
/* rtl:raw:
  .rtl-flip {
    transform: scaleX(-1);
  }
  .rtl-flip.bi:before{
    transform: inherit;
  }
*/
.preloader {
  background-color: #0f0f10;
  position: fixed;
  z-index: 1190;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
}
.preloader .preloader-item {
  position: absolute;
  top: 50%;
  left: 50%;
  text-align: center;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.comment-wrap .comment-item {
  position: relative;
}
.comment-wrap .comment-item .avatar {
  position: relative;
  z-index: 1;
}
.comment-wrap .comment-item:last-child .comment-line-inner {
  background: #202227;
  height: 20px;
}
.comment-wrap .comment-item-nested {
  padding-left: 2.75rem;
}
.comment-wrap > .comment-item .comment-line-inner {
  position: absolute;
  left: 16px;
  top: 0;
  width: 2px;
  background-color: #202227;
  height: 100%;
}

.comment-item-nested .comment-item {
  position: relative;
}
.comment-item-nested .comment-item .comment-line-inner {
  position: absolute;
  left: -28px;
  top: 0;
  width: 2px;
  background-color: #202227;
  height: 100%;
}
.comment-item-nested .comment-item .comment-line-inner:before {
  content: "";
  position: absolute;
  left: 0;
  top: 20px;
  height: 2px;
  width: 26px;
  background: #202227;
}

@media (min-width: 992px) {
  .rounded-end-lg-0 {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .rounded-start-lg-0 {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  .border-end-lg-0 {
    border-right: 0;
  }
}
.rounded-top-0 {
  border-top-left-radius: 0 !important;
  border-top-right-radius: 0 !important;
}

.rounded-bottom-0 {
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}

.flip-horizontal {
  -webkit-transform: scaleX(-1);
          transform: scaleX(-1);
  display: inline-block;
}

.timeline {
  width: 100%;
}
.timeline .timeline-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 1.5rem;
  position: relative;
}
.timeline .timeline-item:last-child {
  margin-bottom: 0;
}
.timeline .timeline-item .timeline-icon {
  margin-right: 0.8rem;
  position: relative;
  position: relative;
}
.timeline .timeline-item .timeline-content {
  width: 100%;
}
.timeline .timeline-item:before {
  content: "";
  position: absolute;
  width: 2px;
  height: calc(100% - 1rem);
  background-color: rgba(255, 255, 255, 0.1);
  top: 2.5rem;
  left: 1.5rem;
  -webkit-transform: translatex(-50%);
          transform: translatex(-50%);
}
.timeline .timeline-item:last-child:before {
  height: calc(100% - 2.5rem);
}

@media (min-width: 992px) {
  .card-chat {
    height: calc(100vh - 5.1125rem - 1.5rem);
  }

  .card-chat-list {
    height: calc(100vh - 10.112rem - 1.5rem);
  }

  .chat-conversation-content {
    height: calc(100% - 5.25rem);
  }

  .chat-tab-list {
    height: calc(100% - 0.75rem);
  }
}
.typing .dot {
  -webkit-animation: TypingAnimation 1.8s infinite ease-in-out;
          animation: TypingAnimation 1.8s infinite ease-in-out;
  background-color: rgba(197, 198, 204, 0.7);
  border-radius: 50%;
  height: 7px;
  margin-right: 4px;
  vertical-align: middle;
  width: 7px;
  display: inline-block;
}
.typing .dot:nth-child(1) {
  -webkit-animation-delay: 200ms;
          animation-delay: 200ms;
}
.typing .dot:nth-child(2) {
  -webkit-animation-delay: 300ms;
          animation-delay: 300ms;
}
.typing .dot:nth-child(3) {
  -webkit-animation-delay: 400ms;
          animation-delay: 400ms;
}
.typing .dot:last-child {
  margin-right: 0;
}

@-webkit-keyframes TypingAnimation {
  0% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
    background-color: rgba(197, 198, 204, 0.7);
  }
  28% {
    -webkit-transform: translateY(-7px);
            transform: translateY(-7px);
    background-color: rgba(197, 198, 204, 0.4);
  }
  44% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
    background-color: rgba(197, 198, 204, 0.2);
  }
}

@keyframes TypingAnimation {
  0% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
    background-color: rgba(197, 198, 204, 0.7);
  }
  28% {
    -webkit-transform: translateY(-7px);
            transform: translateY(-7px);
    background-color: rgba(197, 198, 204, 0.4);
  }
  44% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
    background-color: rgba(197, 198, 204, 0.2);
  }
}
.bi::before,
[class^=bi-]::before,
[class*=" bi-"]::before {
  line-height: 1.5;
}

.fakepasswordicon {
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  cursor: pointer;
}

.fakepasswordicon.fa-eye:before {
  content: "\f06e" !important;
}

.ticket-border {
  border-left: 2px dashed #c5c6cc;
  padding-left: 50px;
  position: relative;
}
.ticket-border:before {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #0f0f10;
  content: "";
  top: -50px;
  left: -25px;
  position: absolute;
}
.ticket-border:after {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #0f0f10;
  content: "";
  bottom: -50px;
  left: -25px;
  position: absolute;
}

@media (max-width: 575.98px) {
  .ticket-border {
    padding-left: 0;
    border: 0;
  }
  .ticket-border:after, .ticket-border:before {
    display: none;
  }
}
.plyr--audio .plyr__controls {
  background: transparent;
}

.plyr--audio .plyr__control.plyr__tab-focus, .plyr--audio .plyr__control:hover, .plyr--audio .plyr__control[aria-expanded=true] {
  background: #0f6fec;
}

[data-autoresize] {
  resize: none;
}

[class*=status-]:before {
  content: "";
  position: absolute;
  z-index: 1;
  border-radius: 100%;
  border: 2px solid #fff;
  height: 12px;
  width: 12px;
  right: -2px;
  top: -2px;
}

.status-online:before {
  background-color: #0cbc87;
}

.status-away:before {
  background-color: #f7c32e;
}

.status-offline:before {
  background-color: #d6293e;
}

.avatar.avatar-lg[class*=status-]:before {
  right: 2px;
  top: 2px;
}

.avatar.avatar-xl[class*=status-]:before {
  right: 4px;
  top: 4px;
}

.avatar.avatar-xxl[class*=status-]:before {
  right: 12px;
  top: 12px;
}

.avatar.avatar-xxxl[class*=status-]:before {
  right: 18px;
  top: 18px;
}

.avatar {
  height: 3rem;
  width: 3rem;
  position: relative;
  display: inline-block;
  -ms-flex-negative: 0 !important;
      flex-shrink: 0 !important;
}

.avatar-img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.avatar-group {
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.avatar-group > li {
  position: relative;
}
.avatar-group > li:not(:last-child) {
  margin-right: -0.8rem;
}
.avatar-group .avatar-img {
  border: 2px solid #fff;
}

.avatar-group-two {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 0;
}
.avatar-group-two > li {
  margin-top: 0.8rem;
  position: relative;
}
.avatar-group-two > li:not(:last-child) {
  margin-right: -1.2rem;
  margin-top: 0;
}

.avatar-group-three {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 0;
  padding-right: 1.2rem;
  position: relative;
}
.avatar-group-three > li {
  position: relative;
}
.avatar-group-three > li:not(:last-child) {
  margin-right: -1.2rem;
}
.avatar-group-three > li:last-child {
  position: absolute;
  bottom: -30px;
  left: 50%;
  top: 0;
  -webkit-transform: translate(-50%, 50%);
          transform: translate(-50%, 50%);
}

.avatar-group-four {
  display: inline-grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: auto auto;
  gap: 0px 0px;
}
.avatar-group-four li {
  margin: 0;
}
.avatar-group-four li:not(:last-child) {
  margin: 0;
}

.avatar-xxs {
  height: 1.5rem;
  width: 1.5rem;
}

.avatar-xs {
  height: 2.1875rem;
  width: 2.1875rem;
}

.avatar-sm {
  height: 2.5rem;
  width: 2.5rem;
}

.avatar-lg {
  height: 4rem;
  width: 4rem;
}

.avatar-xl {
  height: 5.125rem;
  width: 5.125rem;
}

.avatar-xxl {
  height: 5.125rem;
  width: 5.125rem;
}
@media (min-width: 768px) {
  .avatar-xxl {
    width: 8rem;
    height: 8rem;
  }
}

.avatar-xxxl {
  height: 8rem;
  width: 8rem;
}
@media (min-width: 768px) {
  .avatar-xxxl {
    width: 11rem;
    height: 11rem;
  }
}

.avatar-story {
  position: relative;
  padding: 4px;
  z-index: 1;
}
.avatar-story:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  border: 2px solid #0f6fec;
  z-index: -1;
}

.avatar-uploader {
  position: relative;
}
.avatar-uploader .avatar-edit {
  position: absolute;
  right: 0;
  z-index: 1;
  top: 0;
}
.avatar-uploader .avatar-edit input {
  display: none;
}
.avatar-uploader .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #191a1f;
  border: 1px solid transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
  cursor: pointer;
  font-weight: normal;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.avatar-uploader .avatar-edit input + label:after {
  content: "\f303";
  font-family: "Font Awesome 5 Free";
  color: #c5c6cc;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  text-align: center;
  font-weight: 900;
  -webkit-transform: translate(0, -56%);
          transform: translate(0, -56%);
  margin: 0 auto;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.avatar-uploader .avatar-edit input + label:hover {
  background: #0f6fec;
  border-color: #0f6fec;
}
.avatar-uploader .avatar-edit input + label:hover:after {
  color: #fff;
}
.avatar-uploader img#avatar-preview {
  -o-object-fit: cover;
     object-fit: cover;
}

.tns-outer {
  position: relative;
}

.tns-item {
  -ms-touch-action: pan-y;
      touch-action: pan-y;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.tiny-slider .item {
  position: relative;
}

.tns-controls [data-controls] {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  width: 30px;
  height: 30px;
  line-height: 30px;
  border-radius: 0.4rem;
  display: block;
  z-index: 9;
  text-align: center;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background: rgba(15, 111, 236, 0.3);
  color: #fff;
  border: none;
  padding: 0;
  margin: 0 5px;
}
.tns-controls [data-controls]:hover {
  background-color: #0f6fec;
  color: #fff;
}
.tns-controls [data-controls] i {
  line-height: inherit;
}

.tns-controls [data-controls=prev] {
  left: 0;
}

.tns-controls [data-controls=next] {
  right: 0;
}

/* rtl:raw:
.tiny-slider .tns-controls [data-controls]{
  transform: scaleX(-1) translateY(-50%);
}
.tns-visually-hidden {
  right: -10000em !important;
  left: 0 !important;
}
*/
.arrow-dark [data-controls] {
  background: #0f0f10;
  color: #fff;
}

.arrow-white [data-controls] {
  background-color: #191a1f;
  color: #a1a1a8;
}

.arrow-round [data-controls] {
  border-radius: 50%;
}

.arrow-hover {
  overflow: hidden;
}
.arrow-hover [data-controls=prev] {
  left: -60px;
}
.arrow-hover [data-controls=next] {
  right: -60px;
}
.arrow-hover:hover [data-controls=prev] {
  left: 0px;
}
.arrow-hover:hover [data-controls=next] {
  right: 0px;
}

.tns-nav {
  position: absolute;
  top: 100%;
  bottom: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  z-index: 10;
  width: auto;
  text-align: center;
  white-space: nowrap;
}
.tns-nav [data-nav] {
  position: relative;
  display: inline-block;
  margin: 0 4px;
  padding: 0;
  width: 14px;
  height: 14px;
  border-radius: 50%;
  overflow: hidden;
  background-color: transparent;
  -webkit-box-shadow: inset 0 0 0 2px #464950;
          box-shadow: inset 0 0 0 2px #464950;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  border: 0;
}
.tns-nav .tns-nav-active {
  background-color: #fff;
}

.dots-inside .tns-nav {
  top: auto;
  padding-bottom: 20px;
}

.dots-white .tns-nav [data-nav] {
  -webkit-box-shadow: inset 0 0 0 2px #fff;
          box-shadow: inset 0 0 0 2px #fff;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.dots-white .tns-nav [data-nav]:after {
  background-color: #fff;
  -webkit-box-shadow: 0 0 1px #fff;
          box-shadow: 0 0 1px #fff;
}

.dots-dark .tns-nav [data-nav] {
  -webkit-box-shadow: inset 0 0 0 2px #a1a1a8;
          box-shadow: inset 0 0 0 2px #a1a1a8;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.dots-dark .tns-nav [data-nav]:after {
  background-color: #a1a1a8;
  -webkit-box-shadow: 0 0 1px #a1a1a8;
          box-shadow: 0 0 1px #a1a1a8;
}

.modeswitch-wrap {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  cursor: pointer;
}
.modeswitch-wrap .modeswitch-item {
  width: 42px;
  height: 12px;
  background: #30343c;
  border-radius: 60px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 0 16px;
  -webkit-transition: all 1s;
  transition: all 1s;
}
.modeswitch-wrap .modeswitch-item .modeswitch-icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-transform: translateX(-14%);
          transform: translateX(-14%);
  height: 26px;
  width: 26px;
  background: #d8831b;
  border: 2px solid #fff;
  border-radius: 50%;
  -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.4);
          box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.4);
  font-size: 14px;
  color: #fff;
  -webkit-transition: all 1s;
  transition: all 1s;
}
.modeswitch-wrap .modeswitch-item .modeswitch-icon:before {
  content: "\f185";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  border: none;
  height: 26px;
  width: 26px;
  line-height: 26px;
  text-align: center;
  display: block;
}

html[data-theme=dark] .modeswitch-item {
  background: #a1a1a8;
}
html[data-theme=dark] .modeswitch-item .modeswitch-icon {
  -webkit-transform: translateX(18px) rotate(1turn);
          transform: translateX(18px) rotate(1turn);
  background: #0f0f10;
}
html[data-theme=dark] .modeswitch-item .modeswitch-icon:before {
  content: "\f186";
}

.navbar-dark .modeswitch-item {
  background: #464950;
}

.dark-mode-item {
  display: none !important;
}

html[data-theme=dark] .dark-mode-item {
  display: block !important;
}
html[data-theme=dark] .light-mode-item {
  display: none !important;
}

.gslide-description.description-left,
.gslide-description.description-right {
  max-width: 360px;
}

.gdesc-inner {
  width: 100%;
}

.glightbox-container .gslide {
  -webkit-user-select: inherit;
     -moz-user-select: inherit;
      -ms-user-select: inherit;
          user-select: inherit;
}

.glightbox-clean .gslide-desc {
  font-family: "Inter", sans-serif;
}

.glightbox-mobile .glightbox-container .gslide-desc .bg-light {
  background: #0f0f10 !important;
}
.glightbox-mobile .glightbox-container .gslide-desc .form-control {
  border-color: rgba(255, 255, 255, 0.1);
}
.glightbox-mobile .glightbox-container .gslide-desc .text-secondary {
  color: #fff !important;
}
.glightbox-mobile .glightbox-container .gslide-desc .dropdown-menu {
  background: #0f0f10 !important;
}
.glightbox-mobile .glightbox-container .gslide-desc a {
  font-weight: normal;
}
.glightbox-mobile .glightbox-container .gslide-desc .nav.nav-divider .nav-item {
  color: #fff !important;
}

.choices .choices__inner {
  background-color: #191a1f;
  color: #c5c6cc;
  border: 1px solid #30343c;
  line-height: 1.5;
  border-radius: 0.4rem;
  min-height: auto;
  padding: 0.5rem 1rem !important;
  font-size: 0.9375rem;
}
.choices .choices__list--multiple .choices__item {
  background-color: #202227;
  border: 1px solid #202227;
  border-radius: 0.4rem;
  color: #c5c6cc;
}
.choices .choices__list--dropdown {
  background: #191a1f;
  border: 1px solid #30343c;
}
.choices .choices__list--dropdown .choices__item--selectable.is-highlighted {
  background-color: #202227;
}
.choices .choices__list--dropdown .choices__item {
  color: #c5c6cc;
}
.choices .choices__input {
  background: transparent;
  padding: 0;
  color: #c5c6cc;
}

.choices__list--single {
  padding: 0;
}

.choices[data-type*=select-multiple] .choices__button, .choices[data-type*=text] .choices__button {
  border-left: 1px solid #c5c6cc;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e");
}

.choices[data-type*=select-one]:after {
  content: "";
  height: 10px;
  width: 10px;
  border: none;
  border-width: 5px;
  position: absolute;
  right: 11.5px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  margin-top: 0;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 16px 12px;
}

.choices[data-type*=select-one].is-open:after {
  margin-top: 0;
}

.choices[data-type*=select-one] .choices__input {
  background: #191a1f;
  border-color: #191a1f;
}

.choices.is-focused .choices__inner {
  border-color: #0f6fec;
}

.choices[data-type*=select-one] .choices__list > .choices__list > .choices__item--selectable, .choices[data-type*=select-multiple] .choices__list > .choices__list > .choices__item--selectable {
  padding-right: 0px;
}

.choices[data-type*=select-one] .choices__list > .choices__list > .choices__item--selectable::after, .choices[data-type*=select-multiple] .choices__list > .choices__list > .choices__item--selectable::after {
  display: none;
}

.dropzone {
  min-height: auto;
  border-radius: 0.4rem;
  position: relative;
  z-index: 0;
  border: 2px dashed #c5c6cc;
}
.dropzone .dz-preview.dz-image-preview {
  background: transparent;
}

.dropzone-custom {
  position: relative;
}
.dropzone-custom .dz-cover-preview {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: 0;
}
.dropzone-custom .dz-cover-preview .dz-cover-preview-wrap {
  position: absolute;
  height: 100%;
  width: 100%;
  border: 0 !important;
  overflow: hidden;
}
.dropzone-custom .dz-preview {
  min-height: auto;
  margin: 0;
  width: 100%;
}
.dropzone-custom .dz-preview.dz-cover-preview .dz-cover-preview-img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  border-radius: 0.375rem;
}
.dropzone-custom.dropzone-cover .dz-message {
  padding: 6rem 2rem;
}
.dropzone-custom.dropzone-cover.dz-file-processing .dz-message {
  display: none;
}
.dropzone-custom.dropzone-cover.dz-file-processing.dz-file-complete .dz-message {
  display: block;
}
.dropzone-custom.dropzone-cover.dz-max-files-reached .dz-message {
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  opacity: 0;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  border-color: transparent;
}
.dropzone-custom.dropzone-cover .dz-preview.dz-cover-preview .dz-cover-preview-img {
  width: 100%;
  height: 100%;
}
.dropzone-custom .dz-message {
  position: relative;
  padding: 2rem;
  margin: 0;
}
.dropzone-custom.dropzone .dz-preview {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
}

.dropzone-custom.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
  cursor: pointer;
}

.dropzone-custom.dropzone-cover.dz-max-files-reached:focus .dz-message, .dropzone.dropzone-cover.dz-max-files-reached:hover .dz-message {
  opacity: 1;
}

.os-theme-dark > .os-scrollbar > .os-scrollbar-track > .os-scrollbar-handle,
.os-theme-dark > .os-scrollbar:hover > .os-scrollbar-track > .os-scrollbar-handle {
  background: rgba(197, 198, 204, 0.15);
}

.iphone-x {
  position: relative;
  margin: 40px auto;
  width: 360px;
  height: 780px;
  background-color: #0f0f10;
  border-radius: 40px;
  -webkit-box-shadow: 0px 0px 0px 11px #c5c6cc, 0px 0px 0px 13px #c5c6cc, 0px 0px 0px 20px #9e9ea3;
          box-shadow: 0px 0px 0px 11px #c5c6cc, 0px 0px 0px 13px #c5c6cc, 0px 0px 0px 20px #9e9ea3;
}
.iphone-x:before, .iphone-x:after {
  content: "";
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}
.iphone-x:after {
  bottom: 7px;
  width: 140px;
  height: 4px;
  background-color: #202227;
  border-radius: 10px;
}
.iphone-x:before {
  top: 0px;
  width: 56%;
  height: 30px;
  background-color: #c5c6cc;
  border-radius: 0px 0px 40px 40px;
}
.iphone-x i,
.iphone-x b,
.iphone-x s,
.iphone-x span {
  position: absolute;
  display: block;
  color: transparent;
}
.iphone-x i {
  top: 0px;
  left: 50%;
  -webkit-transform: translate(-50%, 6px);
          transform: translate(-50%, 6px);
  height: 8px;
  width: 15%;
  background-color: #000;
  border-radius: 8px;
  -webkit-box-shadow: inset 0px -3px 3px 0px rgba(255, 255, 255, 0.2);
          box-shadow: inset 0px -3px 3px 0px rgba(255, 255, 255, 0.2);
}
.iphone-x b {
  left: 10%;
  top: 0px;
  -webkit-transform: translate(180px, 4px);
          transform: translate(180px, 4px);
  width: 12px;
  height: 12px;
  background-color: #000;
  border-radius: 12px;
  -webkit-box-shadow: inset 0px -3px 2px 0px rgba(255, 255, 255, 0.2);
          box-shadow: inset 0px -3px 2px 0px rgba(255, 255, 255, 0.2);
}
.iphone-x b:after {
  content: "";
  position: absolute;
  background-color: rgba(15, 111, 236, 0.5);
  width: 6px;
  height: 6px;
  top: 2px;
  left: 2px;
  top: 3px;
  left: 3px;
  display: block;
  border-radius: 4px;
  -webkit-box-shadow: inset 0px -2px 2px rgba(0, 0, 0, 0.5);
          box-shadow: inset 0px -2px 2px rgba(0, 0, 0, 0.5);
}
.iphone-x s {
  top: 50px;
  text-align: center;
  text-decoration: none;
  width: 100%;
  font-size: 70px;
  font-weight: 100;
  padding-top: 60px;
}
.iphone-x span {
  bottom: 50px;
  width: 40px;
  height: 40px;
  background-color: rgba(0, 0, 0, 0.3);
  border-radius: 50%;
  left: 30px;
}
.iphone-x span + span {
  left: auto;
  right: 30px;
}

.iphone-x.iphone-x-small {
  margin: 40px auto;
  width: 300px;
  height: 600px;
}

.iphone-x.iphone-x-half {
  height: 300px;
  background-image: url(../images/mockup/app-placeholder3.jpg);
}

@media (max-width: 575.98px) {
  .iphone-x, .iphone-x.iphone-x-small {
    width: 260px;
    height: 540px;
    background-size: 100%;
  }

  .iphone-x.iphone-x-half {
    width: 240px;
    height: 280px;
    background-size: 100%;
  }
  .iphone-x b {
    left: -6%;
  }
}
.mac_container {
  width: 100%;
  margin: 10px auto;
}

.mac_scaler {
  margin: auto;
  width: 100%;
  padding-top: 57.875%;
  height: 0px;
  position: relative;
}

.mac_holder {
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
}

.mac_screen {
  margin: auto;
  background: #c5c6cc;
  width: 86%;
  height: 100%;
  border-top-left-radius: 2% 3%;
  border-top-right-radius: 2% 3%;
  border-bottom-left-radius: 5% 3%;
  border-bottom-right-radius: 5% 3%;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 3%;
  position: relative;
  overflow: hidden;
  border: 1px solid #202227;
}
.mac_screen:before {
  content: "";
  position: absolute;
  right: 0.3%;
  top: 0.5%;
  width: 36.5%;
  height: 35%;
  border: 1px solid #c5c6cc;
  border-bottom: none;
  border-left: none;
  border-top-right-radius: 4.5% 7%;
}
.mac_screen:after {
  content: "";
  position: absolute;
  right: -25%;
  top: -25%;
  width: 40%;
  height: 150%;
  background: rgba(32, 34, 39, 0.2);
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.2)), color-stop(40%, rgba(32, 34, 39, 0)));
  background: linear-gradient(rgba(255, 255, 255, 0.2), rgba(32, 34, 39, 0) 40%);
  -webkit-transform: rotate(-30deg);
          transform: rotate(-30deg);
}

.mac_camera {
  background: #333;
  border-radius: 50%;
  width: 1%;
  height: 1.5%;
  position: absolute;
  left: 49.5%;
  top: 2%;
}
.mac_camera:after {
  content: "";
  position: absolute;
  left: 35%;
  top: 40%;
  width: 30%;
  height: 30%;
  border-radius: 50%;
  background: #777;
}

.mac_bottom {
  background: #e9e9e9;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #ccc), to(#444));
  background: linear-gradient(#ccc 50%, #444);
  width: 100%;
  height: 3%;
  position: relative;
  top: -1.7%;
  border-bottom-left-radius: 6% 50%;
  border-bottom-right-radius: 6% 50%;
}

.mac_bottom_top_half {
  width: 100%;
  height: 50%;
  background: #e9e9e9;
  background: -webkit-gradient(linear, left top, right top, from(#aaa), color-stop(0.5%, #f3f3f3), color-stop(2.5%, #aaa), color-stop(5.5%, #f3f3f3), color-stop(94.5%, #f3f3f3), color-stop(97.5%, #aaa), color-stop(99.5%, #f3f3f3), to(#aaa));
  background: linear-gradient(90deg, #aaa, #f3f3f3 0.5%, #aaa 2.5%, #f3f3f3 5.5%, #f3f3f3 94.5%, #aaa 97.5%, #f3f3f3 99.5%, #aaa);
}

.mac_bottom:after {
  content: "";
  position: absolute;
  right: 1%;
  bottom: 11%;
  width: 98%;
  height: 0%;
  -webkit-box-shadow: 1px 0px 8px 1px #333;
          box-shadow: 1px 0px 8px 1px #333;
}

.mac_thumb_space {
  background: #bbb;
  background: radial-gradient(90% 150% at 50% 1%, #eee 49%, #888);
  margin: auto;
  width: 15%;
  height: 60%;
  border-bottom-left-radius: 8% 100%;
  border-bottom-right-radius: 8% 100%;
}

.mac_screen_content {
  width: 100%;
  height: 100%;
  text-align: center;
}

.flatpickr-calendar {
  background: #0f0f10;
  border-color: #0f0f10;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.flatpickr-current-month .flatpickr-monthDropdown-months, .flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month {
  background: #0f0f10;
  border-color: rgba(255, 255, 255, 0.1);
}

.flatpickr-calendar.arrowBottom:before, .flatpickr-calendar.arrowBottom:after {
  border-top-color: #0f0f10;
}

.flatpickr-calendar.arrowTop:before, .flatpickr-calendar.arrowTop:after, .flatpickr-current-month .numInputWrapper span.arrowUp:after {
  border-bottom-color: #0f0f10;
}

.flatpickr-current-month .numInputWrapper span.arrowDown:after {
  border-top-color: #c5c6cc;
}

.flatpickr-current-month .numInputWrapper span.arrowUp:after {
  border-bottom-color: #c5c6cc;
}

.flatpickr-months {
  position: relative;
}

.flatpickr-months .flatpickr-prev-month, .flatpickr-months .flatpickr-next-month {
  border-radius: 0.4rem;
  margin: 3px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  padding: 0;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.flatpickr-months .flatpickr-prev-month svg, .flatpickr-months .flatpickr-next-month svg {
  height: 12px;
  width: 12px;
}
button a{
    color: red;
}
button a:hover{
    color: white;
}
.flatpickr-months .flatpickr-prev-month:hover, .flatpickr-months .flatpickr-next-month:hover {
  background: rgba(15, 111, 236, 0.1);
}
.flatpickr-months .flatpickr-prev-month:hover svg, .flatpickr-months .flatpickr-next-month:hover svg {
  fill: #0f6fec;
}

.flatpickr-day, span.flatpickr-weekday, .flatpickr-months .flatpickr-month {
  color: #c5c6cc;
}

.flatpickr-day.flatpickr-disabled, .flatpickr-day.flatpickr-disabled:hover, .flatpickr-day.prevMonthDay, .flatpickr-day.nextMonthDay, .flatpickr-day.notAllowed, .flatpickr-day.notAllowed.prevMonthDay, .flatpickr-day.notAllowed.nextMonthDay {
  color: rgba(197, 198, 204, 0.3);
}

.flatpickr-months .flatpickr-prev-month, .flatpickr-months .flatpickr-next-month {
  fill: #c5c6cc;
}

.flatpickr-day.today, .flatpickr-day.today:hover, .flatpickr-day.today:focus {
  background: rgba(15, 111, 236, 0.1);
  color: #0f6fec;
  border-color: rgba(15, 111, 236, 0.1);
}

.flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange, .flatpickr-day.selected.inRange, .flatpickr-day.startRange.inRange, .flatpickr-day.endRange.inRange, .flatpickr-day.selected:focus, .flatpickr-day.startRange:focus, .flatpickr-day.endRange:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, .flatpickr-day.endRange:hover, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.endRange.nextMonthDay {
  background: #0f6fec;
  color: #fff;
  border-color: #0f6fec;
}

.flatpickr-day.inRange, .flatpickr-day.prevMonthDay.inRange, .flatpickr-day.nextMonthDay.inRange, .flatpickr-day:hover, .flatpickr-day.prevMonthDay:hover, .flatpickr-day.nextMonthDay:hover, .flatpickr-day:focus, .flatpickr-day.prevMonthDay:focus, .flatpickr-day.nextMonthDay:focus {
  background: #202227;
  border-color: #202227;
  color: #c5c6cc;
}

.flatpickr-day.today.inRange, .flatpickr-day.prevMonthDay.today.inRange, .flatpickr-day.nextMonthDay.today.inRange {
  background: rgba(15, 111, 236, 0.1);
  color: #0f6fec;
  border-color: rgba(15, 111, 236, 0.1);
}

.flatpickr-day.inRange {
  -webkit-box-shadow: -5px 0 0 #202227, 5px 0 0 #202227;
          box-shadow: -5px 0 0 #202227, 5px 0 0 #202227;
}

.flatpickr-day.selected.startRange + .endRange:not(:nth-child(7n+1)), .flatpickr-day.startRange.startRange + .endRange:not(:nth-child(7n+1)), .flatpickr-day.endRange.startRange + .endRange:not(:nth-child(7n+1)) {
  -webkit-box-shadow: -10px 0 0 #0f6fec;
          box-shadow: -10px 0 0 #0f6fec;
}

.flatpickr-input:disabled, .flatpickr-input[readonly] {
  background-color: #191a1f;
}

.flatpickr-time input:hover, .flatpickr-time .flatpickr-am-pm:hover, .flatpickr-time input:focus, .flatpickr-time .flatpickr-am-pm:focus {
  background: #202227;
}

.flatpickr-calendar.hasTime .flatpickr-time {
  border-top-color: rgba(255, 255, 255, 0.1);
}

.flatpickr-current-month {
  font-size: 120%;
  padding: 9.48px 0 0 0;
  border-radius: 0.4rem;
}

@media (max-width: 575.98px) {
  .flatpickr-calendar, .flatpickr-days, .dayContainer {
    width: 100%;
    min-width: 100%;
    max-width: 100%;
  }
}
/*User CSS*/
/*# sourceMappingURL=style-dark.css.map */

</style>
</head>

<body>


<main>

    <div class="container">
        <div class="row g-4">

          <!-- Main content START -->
          <div class="col-lg-8 vstack gap-4">
            <!-- My profile START -->
            <div class="card">
              <!-- Cover image -->
              <div class="h-200px rounded-top" style="background-image:url(assets1/images/avatar/07.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                <!-- Card body START -->
                <div class="card-body py-0">
                  <div class="d-sm-flex align-items-start text-center text-sm-start">
                    <div>
                      <!-- Avatar -->
                      <div class="avatar avatar-xxl mt-n5 mb-3">
                        <img class="avatar-img rounded-circle border border-white border-3" src="assets1/images/avatar/07.jpg" alt="MTN">
                      </div>
                    </div>
                    <div class="ms-sm-4 mt-sm-3">
                      <!-- Info -->
                      <h1 class="mb-0 h5">{{ Auth::user()->name}}<i class="bi bi-patch-check-fill text-success small"></i></h1>

                    </div>
                    <!-- Button -->
                    <div class="d-flex mt-3 justify-content-center ms-sm-auto">
                      <button class="btn btn-danger-soft me-2" type="button"> <i class="bi bi-pencil-fill pe-1"></i><a href="/Soutien_Edit">Edit profile</a></button>
                      <div class="dropdown">
                        <!-- Card share action menu -->
                        <button class="icon-md btn btn-light" type="button" id="profileAction2" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi bi-three-dots"></i>
                        </button>
                        <!-- Card share action dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileAction2">
                          <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Share profile in a message</a></li>
                          <li><a class="dropdown-item" href="#"> <i class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save your profile to PDF</a></li>
                          <li><a class="dropdown-item" href="#"> <i class="bi bi-lock fa-fw pe-2"></i>Lock profile</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#"> <i class="bi bi-gear fa-fw pe-2"></i>Profile settings</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- List profile -->
                  <ul class="list-inline mb-0 text-center text-sm-start mt-3 mt-sm-0">
                    <li class="list-inline-item"><i class="bi bi-briefcase me-1"></i>{{ Auth::user()->email }}</li>
                    <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i>{{ Auth::user()->localisation_adresse }}</li>
                    <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> Joined on {{ Auth::user()->created_at }}</li>
                  </ul>
                </div>
                <!-- Card body END -->
                <div class="card-footer mt-3 pt-2 pb-0">
                  <!-- Nav profile pages -->
                  <ul class="nav nav-bottom-line align-items-center justify-content-center justify-content-md-start mb-0 border-0">
                    <li class="nav-item"> <a class="nav-link" href="/redirects"> Posts </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/Soutien-About"> About </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/Soutien-Media"> Photos</a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="/Soutien-Video"> Videos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/Soutien-event"> Events</a> </li>
                    <li>                <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                         <?php         $affected = DB::table('users')
                         ->where('id', Auth::user()->id)
                         ->update(['status' => 'Desactive now']); ?>
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf

                     </form></li>
                </ul>
                </div>
              </div>

           </a>


        <!-- Video START -->
        <div class="card">
          <!-- Card header START -->
          <div class="card-header border-0 pb-0">
            <h5 class="card-title">Videos</h5>
            <!-- Button modal -->
          </div>
          @foreach ($video as $videos )

          <!-- Card feed item START -->
          <div class="card">
            <!-- Card header START -->
            <div class="card-header border-0 pb-0">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <!-- Avatar -->
                  <div class="avatar avatar-story me-2">
                    <a href="#!"> <img class="avatar-img rounded-circle" src="assets1/images/avatar/04.jpg" alt=""> </a>
                  </div>
                  <!-- Info -->
                  <div>
                    <div class="nav nav-divider">
                      <h6 class="nav-item card-title mb-0"> <a href="#!"> {{ Auth::user()->name}} </a></h6>
                      <span class="nav-item small">{{ $videos->created_at}}</span>
                    </div>
                    <p class="mb-0 small">{{ Auth::user()->email}}</p>
                  </div>
                </div>
                <!-- Card feed action dropdown START -->
                <div class="dropdown">
                  <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots"></i>
                  </a>
                  <!-- Card feed action dropdown menu -->
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction1">
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                  </ul>
                </div>
                <!-- Card feed action dropdown END -->
              </div>
            </div>
            <!-- Card header END -->
            <!-- Card body START -->
            <div class="card-body">
              <p>{{$videos->libellé}}</p>
              <!-- Card video -->
              <video width="320" height="240" autoplay muted controls>
                <source src="{{ asset('upload')}}/{{ $videos['contenu']}}" type="video/mp4">
                </video>
              <!-- Feed react START -->
              <ul class="nav nav-stack py-3 small">
                <li class="nav-item">
                  <a class="nav-link active" href="#!"> <i class="bi bi-hand-thumbs-up-fill pe-1"></i>Liked (56)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                </li>
                <!-- Card share action START -->
                <li class="nav-item dropdown ms-sm-auto">
                  <a class="nav-link mb-0" href="#" id="cardShareAction8" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                  </a>
                  <!-- Card share action dropdown menu -->
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction8">
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                  </ul>
                </li>
                <!-- Card share action END -->
              </ul>
              <!-- Feed react END -->

              <!-- Add comment -->
              <div class="d-flex mb-3">
                <!-- Avatar -->
                <div class="avatar avatar-xs me-2">
                  <a href="#!"> <img class="avatar-img rounded-circle" src="assets1/images/avatar/12.jpg" alt=""> </a>
                </div>
                <!-- Comment box  -->
                @if ($message = Session::get('success'))
                <div class=".alert alert-success">
                    <P>{{$message }}</P>
                </div>
                @endif
                <form class="position-relative w-100">
                  <textarea class="form-control pe-4 bg-light" rows="1" placeholder="Add a comment..."></textarea>
                </form>
              </div>
              <!-- Comment wrap START -->
              <ul class="comment-wrap list-unstyled">
                <!-- Comment item START -->
                <li class="comment-item">
                  <div class="d-flex position-relative">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs">
                      <a href="#!"><img class="avatar-img rounded-circle" src="assets1/images/avatar/05.jpg" alt=""></a>
                    </div>
                    <div class="ms-2">
                      <!-- Comment by -->
                      <div class="bg-light rounded-start-top-0 p-3 rounded">
                        <div class="d-flex justify-content-between">
                          <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a></h6>
                          <small class="ms-2">5hr</small>
                        </div>
                        <p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                      </div>
                      <!-- Comment react -->
                      <ul class="nav nav-divider py-2 small">
                        <li class="nav-item">
                          <a class="nav-link" href="#!"> Like (3)</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#!"> Reply</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#!"> View 5 replies</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Comment item nested START -->
                  <ul class="comment-item-nested list-unstyled">
                    <!-- Comment item START -->
                    <li class="comment-item">
                      <div class="d-flex">
                        <!-- Avatar -->
                        <div class="avatar avatar-xs">
                          <a href="#!"><img class="avatar-img rounded-circle" src="assets1/images/avatar/06.jpg" alt=""></a>
                        </div>
                        <!-- Comment by -->
                        <div class="ms-2">
                          <div class="bg-light p-3 rounded">
                            <div class="d-flex justify-content-between">
                              <h6 class="mb-1"> <a href="#!"> Lori Stevens </a> </h6>
                              <small class="ms-2">2hr</small>
                            </div>
                            <p class="small mb-0">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive.</p>
                          </div>
                          <!-- Comment react -->
                          <ul class="nav nav-divider py-2 small">
                            <li class="nav-item">
                              <a class="nav-link" href="#!"> Like (5)</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!"> Reply</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <!-- Comment item END -->
                    <!-- Comment item START -->
                    <li class="comment-item">
                      <div class="d-flex">
                        <!-- Avatar -->
                        <div class="avatar avatar-story avatar-xs">
                          <a href="#!"><img class="avatar-img rounded-circle" src="assets1/images/avatar/07.jpg" alt=""></a>
                        </div>
                        <!-- Comment by -->
                        <div class="ms-2">
                          <div class="bg-light p-3 rounded">
                            <div class="d-flex justify-content-between">
                              <h6 class="mb-1"> <a href="#!"> Billy Vasquez </a> </h6>
                              <small class="ms-2">15min</small>
                            </div>
                            <p class="small mb-0">Wishing calling is warrant settled was lucky.</p>
                          </div>
                          <!-- Comment react -->
                          <ul class="nav nav-divider py-2 small">
                            <li class="nav-item">
                              <a class="nav-link" href="#!"> Like</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#!"> Reply</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <!-- Comment item END -->
                  </ul>
                  <!-- Load more replies -->
                  <a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center mb-3 ms-5" data-bs-toggle="button" aria-pressed="true">
                    <div class="spinner-dots me-2">
                      <span class="spinner-dot"></span>
                      <span class="spinner-dot"></span>
                      <span class="spinner-dot"></span>
                    </div>
                    Load more replies
                  </a>
                  <!-- Comment item nested END -->
                </li>
                <!-- Comment item END -->
                <!-- Comment item START -->
                <li class="comment-item">
                  <div class="d-flex">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs">
                    <a href="#!"><img class="avatar-img rounded-circle" src="assets1/images/avatar/05.jpg" alt=""></a>
                    </div>
                    <!-- Comment by -->
                    <div class="ms-2">
                      <div class="bg-light p-3 rounded">
                        <div class="d-flex justify-content-between">
                          <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a> </h6>
                          <small class="ms-2">4min</small>
                        </div>
                        <p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                      </div>
                      <!-- Comment react -->
                      <ul class="nav nav-divider pt-2 small">
                        <li class="nav-item">
                          <a class="nav-link" href="#!"> Like (1)</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#!"> Reply</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#!"> View 6 replies</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- Comment item END -->
              </ul>
              <!-- Comment wrap END -->
            </div>
            <!-- Card body END -->
          </div>
          <!-- Card feed item END -->
          @empty($video)

          <h1>YEBGA</h1>

          @endempty
          @endforeach
  </div>
  <!-- Container END -->

</main>
<div style="height: 12cm; background-color:#191a1f;">

</div>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/glightbox-master/dist/js/glightbox.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from social.webestica.com/my-profile-videos.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 10:36:08 GMT -->
</html>
