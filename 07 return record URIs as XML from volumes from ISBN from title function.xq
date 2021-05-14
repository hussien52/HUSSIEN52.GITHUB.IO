xquery version "3.1";

declare namespace xf = "http://www.w3.org/2005/xpath-functions";
  
declare function local:get-isbn-by-title($book-title as xs:string) as element()* {
  let $url := "http://openlibrary.org/search.json?title=" || fn:translate($book-title, " ", "+")
  let $json := fetch:text($url)
  let $isbn-data := fn:json-to-xml($json)
  for $isbn in $isbn-data//xf:array[@key="isbn"]/xf:string/text()
  return element isbn {$isbn}
};

declare function local:get-recorduri-by-isbn($isbn as xs:string) as element()* {
  let $url := "http://openlibrary.org/api/volumes/brief/isbn/" || $isbn || ".json"
  let $json := fetch:text($url)
  let $volume-data := fn:json-to-xml($json)
  for $record-uri in $volume-data//xf:string[@key="recordURL"]/text()
  return element record_uri {$record-uri}
};

let $book := "Digital Humanities"
let $records := local:get-isbn-by-title($book)
let $uris :=
  for $record in $records
  return local:get-recorduri-by-isbn($record)

return $uris