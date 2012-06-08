# NEWS
## Noteworthy changes in release 1.5.12 - Jun 8th, 2012
### Bug Fix
* Fixed a bug that caused the submitting to freeze

## Noteworthy changes in release 1.5.11 - Jun 8th, 2012
### Bug Fix
* Editor really only autofills when open now

## Noteworthy changes in release 1.5.10 - Jun 8th, 2012
### Bug Fix
* Editor autofills only when open now

## Noteworthy changes in release 1.5.9 - Jun 8th, 2012
### Bug Fix 
* Fixed relation tab "To/From" field side effects of swtich to text input
* Fixed email generation error

## Noteworthy changes in release 1.5.9 - Jun 8th, 2012
### Bug Fix
* Fixed XML editor submission error

## Noteworthy changes in release 1.5.8 - Jun 8th, 2012
### Bug Fix
* Fixed accordion resizing
* Removed accordion section headers
* Replaced DistributomeMerged.html with content from DistributomeMerged-layout.html

## Noteworthy changes in release 1.5.7 - Jun 7th, 2012
### Bug Fix
* Now able to submit new distributions/relations after submitting once

## Noteworthy changes in release 1.5.6 - Jun 7th, 2012
### Feature
* XML Editor is now more dynamic and draggable

## Noteworthy changes in release 1.5.5 - Jun 7th, 2012
### Feature
* Populate all the fields of selected distribution in XML Editor

## Noteworthy changes in release 1.5.4 - Jun 6th, 2012
### Bug Fix
* Navigator graph shows properly now

## Noteworthy changes in release 1.5.3 - Jun 1st, 2012
### Feature
* New added field in the distribution will also be autofilled
### Bug Fix
* Fix right panel math Lax not shown properly

## Noteworthy changes in release 1.5.2 - May 31th, 2012
### Bug Fix
* Fix XML Editor distribution not properly filled up other field

## Noteworthy changes in release 1.5.1 - May 30th, 2012
### Bug Fix
* XML Editor autofill properly clear up previous selection for both Distribution and Relation

## Noteworthy changes in release 1.5 - May 28th, 2012
### Feature
* Uses separated Distributions-Relations and References DB
* References now stored as <reference id=""><bib>bibdata</bib></reference>
* Made changes to DistributomeNavigator.html
* References displays from BiB style citations
* Upload Interface and read implemented, but graph redraw causes error

TODO:
* Merge into NavigatorMerged
* One of the issues faced was including the upload function edged out the other buttons
    ->Suggestion: Get rid of 2 buttons
* Check for errors
* Redraw graph and refresh data
* Make sure editor properly forms new XML style for citations

## Noteworthy changes in release 1.4 - May 24th, 2012
### Feature
* New layout design applied to DistributomeMerged-layout.html
* New CSS in style.css
* New images for layout in images/new/
* Slightly modified jquery accordion smoothness theme to custom-theme

## Noteworthy changes in release 1.3 - May 24th, 2012

### Feature
* Enable select and autofill both distribution and relation field in Editor

## Noteworthy changes in release 1.2 - May 15th, 2012

### Feature
* Editor and Navigator functionality merged into DistributomeMerged.html

### Bug Fix
* XML generated from the Editor wasn't properly nested

## Noteworthy changes in release 1.1 - May 15th, 2012

### Bug Fix
* XML generated from the Editor now properly formatted

## Noteworthy changes in release 1.0 - May 14th, 2012

### Feature
* Navigator displays references in a standard format using BibTex

## Noteworthy changes in release 0.6 - May 13th, 2012

### Bug Fix
* disabled other window with xml data from popping up
* made sure the emailing of the xml worked

### Feature
* allow for submitting multiple distributions/relations/citations

## Noteworthy changes in release 0.5 - May 12th, 2012

### Bug Fix
* fixed a JS error from the splitter
* fixed an error with the editor submission dialog

## Noteworthy changes in release 0.4 - May 11th, 2012
 
### Feature
* Save XML based on current tab style and display it on a new page

## Noteworthy changes in release 0.3 - May 10th, 2012

### Feature
* Added tabs to the editor
* Added "Save" button that calls saveXML()
* Added "Submit" button that opens submit dialog

## Noteworthy changes in release 0.2 - May 4th, 2012

###Feature
* Check email injection and send XML body to designated email addess.

## Noteworthy changes in release 0.1 - May 4th, 2012

### Feature
* Save XML based on current tab style and display it on a new page
* Clicking submit in the editor box will open a submission dialog that prompts for an email address and captcha code verification.
