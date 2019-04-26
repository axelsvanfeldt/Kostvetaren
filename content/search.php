<?php ContentHandler::getHeader($config, 'search');?>
<div class="dashed-wrapper text-align-center">
    <p>Håll koll på vad du äter med hjälp av <?php echo $config["full_name"];?>!</p>
    <p>Ange en valfri livsmedelsprodukt eller maträtt i sökfältet och tryck på ett resultat för att ta reda på vad din mat innehåller.</p>
</div>
<input type="search" class="search-input" placeholder="Ange sökterm">
<div class="clear-button ui-btn ui-icon-delete ui-btn-icon-right custom-button">Rensa sökning</div>
<div id="search-result"></div>
<?php ContentHandler::getFooter();?>