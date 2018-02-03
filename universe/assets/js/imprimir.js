// JavaScript Document

function imprimir(barcode)
    {
		//alert (barcode);
		var newWindow = window.open("","Item en código de barras","width=400,height=450,left=100,top=60");
   			newWindow.document.open();
   			newWindow.document.write('<html><head></head><body onload="window.print()"><img align="center" src="'+ barcode +'"/></body></html>'); 
   			newWindow.document.close();
   			newWindow.focus();		
    }
