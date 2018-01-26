<html>

    <head>
        <title>Student management| Update</title>
    </head>

    <body>
        <form action = "/edit/<?php $users[0]->id;?>" method = "post">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type = "text" name = "stud_name"  value="<?php echo $users[0]?>"/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type = "text" name = "email"  value="<?php echo $users[0]?>"/></td>
                </tr>
                <tr>
                    <td colspan = "2" align = "center">
                        <input type = "submit" value = "Update" />
                    </td>
                </tr>
            </table>
        </form>
