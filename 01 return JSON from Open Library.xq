xquery version "3.1";

let $uri := "http://openlibrary.org/search.json?title=digital+humanities"
let $json := fetch:text($uri)

return $json