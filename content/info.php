<?php ContentHandler::getHeader($config, 'info');?>
<div class="page-title">Information</div>
<div class="dashed-wrapper">
    <p><?php echo $config["full_name"];?> hjälper dig att enkelt ta reda på näringsämnen i din mat.</p>
    <p>Med hjälp av sökfältet kan du söka efter livsmedel eller maträtter och få listat dess innehåll i över 50 näringsämnen.
    <br>Tryck på ett specifikt sökresultat för att få information om dess innehåll.</p>
    <p>All data är hämtad från livsmedelsverket och innehåller en lista på över 2100 livsmedel och maträtter.</p>
</div>
<div class="dashed-wrapper page-title">
    Lär dig mer om...
</div>
<a href="#fat-page" id="fat-button" class="ui-btn ui-icon-info ui-btn-icon-right custom-button">Fett</a>
<a href="#carbohydrates-page" id="carbohydrates-button" class="ui-btn ui-icon-info ui-btn-icon-right custom-button">Kolhydrater</a>
<a href="#proteins-page" id="proteins-button" class="ui-btn ui-icon-info ui-btn-icon-right custom-button">Protein</a>
<a href="#salts-page" id="salts-button" class="ui-btn ui-icon-info ui-btn-icon-right custom-button">Salt &amp; mineraler</a>
<a href="#vitamins-page" id="vitamins-button" class="ui-btn ui-icon-info ui-btn-icon-right custom-button">Vitaminer</a>
<?php ContentHandler::getFooter();?>