P2Y2 Asset Data Structure
====

L1 | L2 | l3 | Notes
--- | --- | --- | -----
name | | | Unique key for all assets.
 | package        | | Iff different to `name`.
 | version        | | Very seldom not used.
 | pattern        | | Required for all assets. Used to determine construction of `baseUrl` & `sourcePath`.
 | baseUrl        | | When not constructed.
 | sourcePath     | | When not constructed.
 | static         | | Items specific to `static` usage.
 | | css            | Package CSS if specific to `static`.
 | | js             | Package JS if specific to `static`.
 | | cssIintegrity 4 | Package cssOptions if specific to `static`.
 | | jsIintegrity   | Package jsOptions if specific to `static`.
 | | cssOptions     | Package cssOptions if specific to `static`.
 | | jsOptions      | Package jsOptions if specific to `static`.
 | | publishOptions | Package publishOptions if specific to `static`.
 | published      | | Items specific to `published` usage.
 | | css            | Package CSS if specific to `published`.
 | | js             | Package JS if specific to `published`.
 | | cssOptions     | Package cssOptions if specific to `published`.
 | | jsOptions      | Package jsOptions if specific to `published`.
 | | publishOptions | Package publishOptions if specific to `published`.
 | css            | | Package CSS.
 | js             | | Package JS.
 | cssOptions     | | Package cssOptions.
 | jsOptions      | | Package jsOptions.
 | publishOptions | | Package publishOptions.
 | depends        | | Package depends.


