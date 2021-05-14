xquery version "3.1";

declare namespace xf = "http://www.w3.org/2005/xpath-functions";

let $uri := "http://openlibrary.org/search.json?title=digital+humanities"
let $json := fetch:text($uri)
let $xml := fn:json-to-xml($json)
let $isbns :=
  for $isbn in $xml//xf:array[@key="isbn"]/xf:string/text()
  return element isbn {$isbn}
  
return $isbns