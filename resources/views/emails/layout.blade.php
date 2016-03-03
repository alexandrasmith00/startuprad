<html xmlns="http://www.w3.org/1999/xhtml"><head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Startup RAD</title>
        
      @include('emails.styles')

   </head>
<body>
    
<div class="block">
    @include('emails.preheader')
</div>
    
<div class="block">
    @include('emails.header')
</div>
    
    
    @yield('content')
    
    
    
<div class="block">
   <!-- Start of preheader -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="postfooter">
      <tbody>
         <tr>
            <td width="100%">
               <table width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                  <tbody>
                     <!-- Spacing -->
                     <tr>
                        <td width="100%" height="5"></td>
                     </tr>
                     <!-- Spacing -->
                     <tr>
                        <td align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #999999" st-content="preheader">
                           If you don't want to receive updates. please  <a class="hlite" href="#" style="text-decoration: none; color: #0db9ea">unsubscribe</a> 
                        </td>
                     </tr>
                     <!-- Spacing -->
                     <tr>
                        <td width="100%" height="5"></td>
                     </tr>
                     <!-- Spacing -->
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   <!-- End of preheader -->
</div>

</body></html>