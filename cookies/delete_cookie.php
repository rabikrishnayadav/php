<?php
// for delete the cookie set name of that cookie and leave other feilds blank or fill will 'null'.
setcookie('name', null);
setcookie('username', null, time()-600); // this is for delete all the cookie which is created or update with username. 

?>