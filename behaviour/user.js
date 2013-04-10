$('document').ready(function()
{
    // Path to MySQL configuration.
    var server = '../server/'
    var data   = '../data/'

    function mysql_connection_setup()
    {
        return $.ajax({ url:data + 'mysql_connection_setup.php' });
    }

    function populate()
    {
        $.post(server + 'shop.php', build);
    }

    function build(response)
    {
        $('.items').html(response);
        $('form').submit(remove_item);
    }
    
    function remove_item()
    {
        var form_data = $(this).serialize();
        $.post(
                   server + 'remove.php',
                   form_data,
                   function(response)
                   {
                       console.log(response);
                   }
              );
        return false;
    }
    
    $.when(mysql_connection_setup()).done(populate);

}); // End ready
