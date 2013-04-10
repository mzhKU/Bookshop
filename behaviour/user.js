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
        $('#add_form').submit(add_item);
        $('.items').html(response);
        $('.remove_form').submit(remove_item);
    }
    
    function add_item()
    {
        var form_data = $(this).serialize();
        console.log(form_data);
        return false;
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
        populate();
    }

    $.when(mysql_connection_setup()).done(populate);

}); // End ready
