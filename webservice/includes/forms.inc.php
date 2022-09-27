<?php
function page_1() {
  foreach ($_GET as $key => $element) {
    echo "<input type=\"hidden\" name=\"$key\" id=\"$key\" value=\"$element\">";
  }
}
?>