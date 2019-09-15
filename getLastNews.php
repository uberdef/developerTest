<?
if(CModule::IncludeModule("iblock")) {

    $arXML = CIBlockRSS::GetNewsEx('www.lenta.ru', '80', '/rss/', '');
    
    if(count($arXML) > 0)
    {
        $arRSS = CIBlockRSS::FormatArray($arXML);
    
        $i = 0;
        foreach ($arRSS['item'] as $item) {
    
            echo "■ ".$item["title"]."\n";
            echo "■ ".$item["link"]."\n";
            echo "■ ".$item["description"]."\n";
            echo "\n";
    
            $i++;
            if($i==5) {
                break;
            }
    
        }
    }
    
}
?>