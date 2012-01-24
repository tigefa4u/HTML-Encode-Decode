<html>
   <head>
      <title>HTML Encode / Decode</title>
      
      <!-- Scripts -->
      <script type="text/javascript" src="encoder.js"></script>
      <script type="text/javascript" src="encode_decode.js"></script>
      <script type="text/javascript">
         var _gaq = _gaq || [];
         _gaq.push(['_setAccount', 'UA-15610654-5']);
         _gaq.push(['_trackPageview']);

         (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         })();
      </script>
      
      <!-- Styles -->
      <style type="text/css">
         #encoded_area { width: 45%; float: left; }
         #encoded_box { width: 100%; height: 400px; }
         #encode_btn { width: 100%; }
         
         #decoded_area { width: 45%; float: right; }
         #decoded_box { width: 100%; height: 400px; }
         #decode_btn { width: 100%; }
         
         #footer { width: 100%; text-align: center; float: left; }
      </style>
   </head>
   <body>
      <div id="encoded_area">
         <h2>HTML to Decode</h2>
         <textarea id="encoded_box"></textarea>
         <button id="encode_btn" onclick="decode_html(document.getElementById('encoded_box').value)">Decode</button>
      </div>
      <div id="decoded_area">
         <h2>HTML to Encode</h2>
         <textarea id="decoded_box"></textarea>
         <button id="decode_btn" onclick="encode_html(document.getElementById('decoded_box').value)">Encode</button>
      </div>
      <div id="footer">
         <p>
            &copy; <a href="http://aaroncrowder.com">Aaron Crowder</a>, 2011
         </p>
         <p>
            Encode.js Library from <a href="http://www.strictly-software.com/htmlencode">Strictly Software</a>
         </p>
      </div>
   </body>
</html>