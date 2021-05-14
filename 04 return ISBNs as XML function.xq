xquery version "3.1";

declare namespace xf = "http://www.w3.org/2005/xpath-functions";
  
declare function local:get-isbn-by-title($book-title as xs:string) as element()* {
  let $url := "http://openlibrary.org/search.json?title=" || fn:translate($book-title, " ", "+")
  let $json := fetch:text($url)
  let $isbn-data := fn:json-to-xml($json)
  for $isbn in $isbn-data//xf:array[@key="isbn"]/xf:string/text()
  return element isbn {$isbn}
};

let $book := "Digital Humanities"
let $isbns := local:get-isbn-by-title($book)

return $isbns