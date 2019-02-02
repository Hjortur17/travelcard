var xml = "https://www.landsbankinn.is/modules/markets/services/XMLGengi.asmx/NyjastaGengiByType?strTegund=A",
       xmlDoc = $.parseXML( xml ),
       $xml = $( xmlDoc ),
       $title = $xml.find( "Mynt" );
 
// Append "RSS Title" to #someElement
$( "#someElement" ).append( $title.text() );
 
// Change the title to "XML Title"
$title.text( "XML Title" );
 
// Append "XML Title" to #anotherElement
$( "#anotherElement" ).append( $title.text() );