<?php
function getGallery ($directoryPath) {
    $directoryList = scandir($directoryPath);    
    return getHTMLElem($directoryList);
};
