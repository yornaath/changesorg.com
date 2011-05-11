<html>
<head>
<?php
   $meta = array(
      'dk' => array(
         'lang'        => 'da',
         'title'       => 'SURFTOWN - Success Online',
         'description' => 'Webhotel, domæne, hjemmeside, blog, webshop fra kr. 9,- inkl. gratis support kun hos SURFTOWN. Kom i gang uden teknisk baggrund - det er legende let!',
         'keywords'    => 'webhotel, domæne, webshop, domain, hjemmeside, blog, gratis support, support, surftown',
      ),
      'no' => array(
         'lang'        => 'no',
         'title'       => 'SURFTOWN - Success Online',
         'description' => 'Webhotel, domæne, hjemmeside, blog, webshop fra kr. 10,- inkl. gratis support kun hos SURFTOWN. Kom i gang uden teknisk baggrund - det er legende let!',
         'keywords'    => 'webhotel, domæne, webshop, domain, hjemmeside, blog, gratis support, support, surftown',
      ),
      'se' => array(
         'lang'        => 'sv',
         'title'       => 'SURFTOWN - Success Online',
         'description' => 'Webbhotel, domänregistrering, hemsida, blog og webshop fra 12:- inkl. fri support kun hos SURFTOWN. Kräver inga tekniska förkunskaper och kan därför användas av nybörjare!',
         'keywords'    => 'webbhotell, webhotell, domän, hemsida , webbplats, webbsite, domänregistrering, hosting, blog'
      )
   );
   $default = array(
      'lang'        => 'en',
      'title'       => 'SURFTOWN - Success Online',
      'description' => 'Website, domain registration, homepage, blog and ecommerce from 1.99 incl. free support only at SURFTOWN. No technical skills required to get started - perfect for beginners!',
      'keywords'    => 'website, web site, domain, domain registration, homepage, home page, hosting, blog, ecommcerce, webshop'
   );
   preg_match('/\.([a-z]+)$/', $_SERVER['HTTP_HOST'], $tld);
   $meta = array_merge($default, $meta[$tld[1]]);

   print "    <title>{$meta[title]}</title>\n";
   print "    <meta name=\"description\" lang=\"{$meta[lang]}\" content=\"{$meta[description]}\">\n";
   print "    <meta name=\"keywords\" lang=\"{$meta[lang]}\" content=\"{$meta[keywords]}\">\n";
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head>
<body> 
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" valign="middle">
            <a href="http://www.surftown.com"><img src="hosted_by.gif" border="0" /></a>
        </td>
    </tr>
</table>
<?php
   $tags = array(
      '0' => '<h1></h1>',
      '1' => '<h2></h2>',
      '2' => '<h3></h3>',
      '3' => '<h4></h4>',
      '4' => '<h5></h5>',
      '5' => '<h6></h6>',
      '6' => '<em></em>',
      '7' => '<strong></strong>',
      '8' => '<cite></cite>',
      '9' => '<dfn></dfn>',
      'a' => '<code></code>',
      'b' => '<samp></samp>',
      'c' => '<kbd></kbd>',
      'd' => '<var></var>',
      'e' => '<abbr></abbr>',
      'f' => '<acronym></acronym>'
   );
   $hash = md5("Host: {$_SERVER[HTTP_HOST]}");
   for ($i = 0; $i < 32; $i++) 
      $data .= ($i % 4 == 0 ? "    " : "") .
               $tags[$hash{$i}] .
               ($i % 4 == 3 ? "\n" : "");
   print "<div style=\"display:none;\">\n$data</div>\n";
?>
</body>
</html>
