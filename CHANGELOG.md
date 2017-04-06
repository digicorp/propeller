#Change Log
All notable changes to this project will be documented in this file.
`Propeller` adheres to [Semantic Versioning](http://semver.org/).

--- 

## [1.1.0](https://github.com/digicorp/propeller/releases/tag/1.1.0) (04/06/2017)
Released on Thursday, April 06, 2017. All issues associated with this milestone can be found using this [filter](https://github.com/digicorp/propeller/issues).

#### Highlights
* Integrated Bower and NPM packages. 
 * Integrated Grunt.
 * Added <code>data-duration</code> attribute in Alert component to customize alert visibility time . 
* Removed <code>modal.js</code> file from library and handle Modalbox component vertical center alignment with CSS.
* Fixed active tab bar and navigation arrow alignment issue and active tab container width issue in Scrollable Tab component on Window resize function.
 * Enhanced our Landing page with new section which includes - 'Roadmap'.
* Updated docs section for the components.
 * Fixed up issues in the following component - Dropdown, Alert, Floating Action Button, Select2, Scrollable Tabs, Datetimepicker, and Modalbox.
 
#### Added
###### JS
* [#41dd312](https://github.com/digicorp/propeller/commit/41dd312): Added 'data-duration' attribute in Alert component. 

#### Updated
###### CSS
* [#26f7356](https://github.com/digicorp/propeller/commit/26f7356): Enhanced Dropdown component's animation property.
* [#f41df18](https://github.com/digicorp/propeller/commit/f41df18): Updated css to vertically middle align the modalbox component.

#### Fixed
###### JS
* [#26f7356](https://github.com/digicorp/propeller/commit/26f7356): Resolved Dropdown component's toggle issue for mobile and tablet devices.
 * [#ce8e4bc](https://github.com/digicorp/propeller/commit/ce8e4bc): Resolved Floating label alignment issue in Select2 component, when initial value was null.
* [#be27f64](https://github.com/digicorp/propeller/commit/be27f64): Resolved Sidebar overlay closing issue for window resize function.
 * [#44662c8](https://github.com/digicorp/propeller/commit/44662c8): Resolved Browser Console error issue coming in DateTimePicker component on selecting datepicker only.
* [#41dd312](https://github.com/digicorp/propeller/commit/41dd312): Fixed 'data-duration' issue in Alert component.
 * [#315f701](https://github.com/digicorp/propeller/commit/315f701): Fixed active tab bar and navigation arrow alignment issue and active tab container width issue in Scrollable Tab component for Window resize function.
* [#cf94b03](https://github.com/digicorp/propeller/commit/cf94b03): Resolved Datetimepicker Hour Hand update issue. 

#### Removed
###### CSS
* [#fe22e08](https://github.com/digicorp/propeller/commit/fe22e08): Removed unwanted white space in the browser speciflc CSS property for Accordion component.
 * [#fe722fc](https://github.com/digicorp/propeller/commit/fe722fc) [#3267639](https://github.com/digicorp/propeller/commit/3267639): Removed the ripple effect animtion css class for Floating Action Button component.
###### JS
* [#f41df18](https://github.com/digicorp/propeller/commit/f41df18): Removed 'modal.js' file from modalbox component.

 
#### Packages
* [#f8efeb0](https://github.com/digicorp/propeller/commit/f8efeb0): Integrated Grunt with Propeller.
 * [#e334be8](https://github.com/digicorp/propeller/commit/e334be8): Built NPM packages.
* [#ecdad8b](https://github.com/digicorp/propeller/commit/ecdad8b): Built BOWER packages.
 * Built NPM package for below third party components:
   * [#3308812](https://github.com/digicorp/propeller/commit/3308812): Select2
    * [#386750d](https://github.com/digicorp/propeller/commit/386750d): Range Slider
   * [#2f2a2ee](https://github.com/digicorp/propeller/commit/2f2a2ee): Datetimepicker
    * [#852726b](https://github.com/digicorp/propeller/commit/852726b): Data tables
   * [#fe22e08](https://github.com/digicorp/propeller/commit/fe22e08): Custom Scroll

