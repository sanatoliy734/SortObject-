<?php
function sortObjectSetBy($objectSetForSort, $sortBy){

usort($objectSetForSort, function($object1,$object2) use ($sortBy){
if($object1->$sortBy == $object2->$sortBy) return 0;
return ($object1->$sortBy > $object2->$sortBy) ? -1 : 1;});

return $objectSetForSort;
}
?>
