# Excel dashboard fed by PHP basic webservice

The use of Excel is a good solution here, more than for its nice charts, by the way finance and business professionals can model and simulate the Budget numbers.

The connection to a simple webservice (itself later connected to a control application), is an alternative to the less safe and more labor intensive manual inputng that is still very common in the finance and business areas.

### Scope

This sample contains
* Dashboard Excel sample: excel/dash.xlsm spreadsheet including documentation in the "Help" sheet
* Webservice: index.php provides the sales invoice JSON, based by a hardcoded database
* Viewer: viewer/index.html shows the JSON in the browser console through a Jquery http request   

### Stack

Frontend

* Html/Json
* Excel/VBA

Backend

* PHP

## Set up
-----------

Tou can load these files in a test folder of your web server or just run them from http://www.immaginareservice.com.br/app/exasrvpm

## Tests
-----------
* Read the JSON at http://www.immaginareservice.com.br/app/exasrvpm
* Dowload and open the Excel worksheet
** at http://www.immaginareservice.com.br/app/exasrvpm/excel/dash.xlsm
* Test if the webservice is loading
** In the DbWservice sheet, press "Import" and see if the 12 invoices will be loaded
* Test if the Dashboard graphs work
** In the Param sheet, input 2 in "1-Excel/2-Wservice" and see if the graphs in the Dash sheet will still show te same picture

## Contribution guidelines
-----------
* We welcome any suggestion

## Who do I talk to? ##

* Plinio Prado
   plinio.prado@immaginare.com.br