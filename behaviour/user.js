$('document').ready(function()
{
    // Path to MySQL configuration.
    var server = '../server/'
    var data   = '../data/'
    
    // Event handler for static add_item form.
    $('#add_item_form').submit(add_item);

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
        // Event handlers for dynamic elements.
        $('.items').html(response);
        $('.remove_form').submit(remove_item);
    }
    
    function add_item()
    {
        var form_data = $(this).serialize();
        $.post(
                   server + 'add.php',
                   form_data,
                   populate
              );
        return false;
    }
    
    function remove_item()
    {
        var form_data = $(this).serialize();
        $.post(
                   server + 'remove.php',
                   form_data,
                   //function(response) {console.log(response);}
                   populate
              );
        return false;
    }
    
    $.when(mysql_connection_setup()).done(populate);

}); // End ready
