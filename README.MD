# AdminLTE ready for Laravel 5.7

## Intro
Everytime I start a project, I spend quite amount of time cutting and arranging [AdminLTE](https://adminlte.io) template to fit into my views, and arrange the variables and other customization options.
I decided to do an abstract of the view, include all dependencies (updating to online CDNs ongoing!).

## Installation

---------
## Configurations

configuration files include:

* App Name

    _Laravel installation creates `.env` file with a variable `APP_NAME`, This value would be used accross the view files as provided with a fallback of [Company Name](#)_

* App Short Name

    _Unlike the App Name, this variable is not set.  You will have to update your `.env` file and add the variable name `APP_SHORT_NAME`. If you don't, the view files will show `SHB` whereever it is required to show a short version of the App Name_

---------
## Usage

Each page you create would have the below options to include:
- __`@section('otherMETA')`__
    _Any additional `</meta>` tags that you want to add to the standard ones._
- __`@section('otherCSS')`__
    _Any additional `</link>` files (below existing ones) that you want to add to the standard ones._
- __`@section('otherJS')`__
    _Any additional `</script>` (below existing ones) that you want to add to the standard ones._
- __`@section('contentTitle')`__
    _This section would be utilized in 2 locations:_
    * ___Page Title__: { CONTENT TITLE | APP NAME } `</title>`_
    * ___Page Header__: Top of the content page `</h1>`_
* __`@section('contentTitleDesc')`__
    _This would follow the Page Header in `</small>`_
* __`@section('contents')`__
    _The actual contents of your page, checkout the `./samples/*` for readymade pages_
* __`@section('version')`__
    _This would display the application current version at the bottom rightside of the page (footer section)_

---------
## Optional Tags:

_You can add settings options and relate them to the user; this would allow the user to preserve the customization of their UX._

Options:
- __Skin__ `skin`

    _Options:_
    - Blue `skin-blue` (default)
    - Black `skin-black`
    - Purple `skin-purple`
    - Green `skin-green`
    - Red `skin-red`
    - Yellow `skin-yellow`
    - Light Blue `skin-blue-light`
    - Light Black `skin-black-light`
    - Light Purple `skin-purple-light`
    - Light Green `skin-green-light`
    - Light Red `skin-red-light`
    - Light Yellow `skin-yellow-light`

- __Layout__ `layout`

    _Options:_
    - Original `{EMPTY_STRING}` (default)
    - Fixed `fixed` 
    - Boxed `layout-boxed`
    - Fixed & Boxed `fixed layout-boxed`

- __Navigation Sidebar__ (Leftside) `sideBar`

    _Options:_
    - Mini `sidebar-mini` (default)
    - Collapsed `sidebar-collapse`
    - Expand on Hover `sidebar-expanded-on-hover`

- __Control Sidebar__ (Rightside)

    _Options:_
    - Hidden `{EMPTY_STRING}` (default)
    - Open `control-sidebar-open`
    - Dark Skin `control-sidebar-dark`

---------
## Dependencies
This package includes certain libraries with it.  I am working on replacing these files with an online CDN (except the ones which are specific to this theme); in the meantime, here are the libraries:

| SN | Name | Type | Version | Location | CDN | Notes |
| ----- | ----- | ----- | ----- | ----- | ----- | ----- |
| 01 | Bootstrap | __CSS__ | 3.3.7 | `css/bootstrap.min.css` | `` ||
| 02 | Font Awesome | __CSS__ | 4.7.0 |  `css/font-awesome.min.css` | `` ||
| 03 | Ionicons | __CSS__ | 2.0.0 | `css/Ionicons/css/ionicons.min.css` | `` ||
| 04 | AdminLTE Styles | __CSS__ | _N/A_ | `css/AdminLTE.min.css` | `` | _Specific to this Theme_ |
| 05 | AdminLTE Skins | __CSS__ | _N/A_| `css/skins/_all-skins.min.css` | `` | _Specific to this Theme_ |
| 06 | Morris Chart | __CSS__ | _N/A_ | `css/morris.css` | `` |  |
| 07 | jvectormap | __CSS__ | 2.0.4 | `css/jquery-jvectormap.css` | `` |  |
| 08 | Bootstrap Date Picker | __CSS__ | 1.7.1 | `css/bootstrap-datepicker.min.css` | `` ||
| 09 | Bootstrap Date Range Picker | __CSS__ | 2.1.27 | `css/daterangepicker.css` | `` ||
| 10 | Bootstrap WYSIHTML5 (Text Editor) | __CSS__| 0.4.15 | `css/bootstrap3-wysihtml5.min.css` | `` |  |
| 11 | Google Fonts | __CSS__ | _N/A_ | _N/A_ | `https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic` | _Customizable on `https://fonts.google.com/`_ |
| --- | --- | --- | --- | --- | --- | --- |
| 12 | JQuery | __JS__ | 3.3.1 | `js/jquery.min.js` | `` ||
| 13 | JQuery UI | __JS__ | 1.11.4 | `js/jquery-ui.min.js` | `` ||
| 14 | Bootstrap | __JS__ | 3.3.7 | `js/bootstrap.min.js` | `` ||
| 15 | Raphael JS | __JS__ | 2.2.0 | `js/raphael.min.js` | `` | _works with Morris JS_ |
| 16 | Morris JS | __JS__ | 0.5.0 | `js/morris.min.js` | `` ||
| 17 | JQuery Sparkline | __JS__ | 2.1.3 | `js/jquery.sparkline.min.js` | `` ||
| 18 | jvectormap | __JS__ | 1.2.2 | `js/jquery-jvectormap-1.2.2.min.js` | `` ||
| 19 | jvectormap (World Mill) | __JS__ || `js/jquery-jvectormap-world-mill-en.js` | `` | _Support Library containing areas of countries_ |
| 20 | JQuery Knob Chart | __JS__ | 1.2.12 | `js/jquery.knob.min.js` | `` ||
| 21 | Moment JS | __JS__ | | `js/moment.min.js` | `` | |
| 22 | Bootstrap Date Range Picker | __JS__ | | `js/daterangepicker.js` | `` ||
| 23 | Bootstrap Date Picker | __JS__ || `js/bootstrap-datepicker.min.js` | ``||
| 24 | Bootstrap WYSIHTML5 (Text Editor) | __JS__ | | `js/bootstrap3-wysihtml5.all.min.js` | `` ||
| 25 | Slimscroll | __JS__ | | `js/jquery.slimscroll.min.js` | `` | |
| 26 | FastClick | __JS__ | | `js/fastclick.js` | `` | |
| 27 | AdminLTE App | __JS__ | `js/adminlte.min.js` | `` | |
| 28 | AdminLTE Dashboard demo | __JS__ | | `js/pages/dashboard.js` | _N/A_ | |
| 29 | AdminLTE demo | __JS__ | | `js/demo.js` | _N/A_ | |

----------
## Available Libraries
The links to the CSS & JS files available to use within the framework.  the basic ones are already included in the JS & CSS files; however, other links are to be added if they're required:

___Note:__ Sample pages include their required libraries, checkout the files in `/adminlte/samples/`_

### JS

* `<!-- jQuery 3 --> <script src="{{ asset('js/jquery.min.js') }}"></script>`  (included)

* `<!-- jQuery UI 1.11.4 --> <script src="{{ asset('js/jquery-ui.min.js') }}"></script>`

* `<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --> <script>$.widget.bridge('uibutton', $.ui.button);</script>`

* `<!-- Bootstrap 3.3.7 --> <script src="{{ asset('js/bootstrap.min.js') }}"></script>`  (included)

* `<!-- Morris.js charts --> <script src="{{ asset('js/raphael.min.js') }}"></script> <script src="{{ asset('js/morris.min.js') }}"></script>`

* `<!-- Sparkline --> <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>`

* `<!-- jvectormap --> <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script> <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>`

* `<!-- jQuery Knob Chart --> <script src="{{ asset('js/jquery.knob.min.js') }}"></script>`

* `<!-- daterangepicker --> <script src="{{ asset('js/moment.min.js') }}"></script> <script src="{{ asset('js/daterangepicker.js') }}"></script>`

* `<!-- datepicker --> <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>`

* `<!-- Bootstrap WYSIHTML5 --> <script src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>`

* `<!-- Slimscroll --> <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>`  (included)

* `<!-- FastClick --> <script src="{{ asset('js/fastclick.js') }}"></script>`  (included)

* `<!-- AdminLTE App --> <script src="{{ asset('js/adminlte.min.js') }}"></script>`  (included)

* `<!-- AdminLTE dashboard demo (This is only for demo purposes) --> <script src="{{ asset('js/pages/dashboard.js') }}"></script>`

* `<!-- AdminLTE for demo purposes --> <script src="{{ asset('js/demo.js') }}"></script>`  (included)

### CSS

* `<!-- Bootstrap 3.3.7 --> <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">`  (included)

* `<!-- Font Awesome --> <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">`  (included)

* `<!-- Ionicons --> <link rel="stylesheet" href="{{ asset('css/Ionicons/css/ionicons.min.css') }}">`  (included)

* `<!-- Theme style --> <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">`  (included)

* `<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. --> <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">`  (included)

* `<!-- Morris chart --> <link rel="stylesheet" href="{{ asset('css/morris.css') }}">`

* `<!-- jvectormap --> <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap.css') }}">`

* `<!-- Date Picker --> <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">`

* `<!-- Daterange picker --> <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">` 

* `<!-- bootstrap wysihtml5 - text editor --> <link rel="stylesheet" href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}">`

* `<!-- Google Font --> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">`  (included)
