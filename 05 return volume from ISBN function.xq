xquery version "3.1";

declare function local:get-volume-by-isbn($isbn as xs:string) as element()* {
  let $url := "http://openlibrary.org/api/volumes/brief/isbn/" || $isbn || ".json"
  let $json := fetch:text($url)
  let $volume-data := fn:json-to-xml($json)
  for $volume in $volume-data
  return element volume {$volume}
};

let $isbn := "0262018470"
let $volume := local:get-volume-by-isbn($isbn)

return $volume