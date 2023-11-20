<?php

function commentCountById($id)
{
  $sql = "SELECT COUNT(id_pro) FROM comments WHERE id_pro=$id";
   return  pdo_query_value($sql);
}
function commentGetAll()
{
  $sql = "SELECT DISTINCT p.name,p.img,c.id_pro FROM comments c
    LEFT JOIN products p ON c.id_pro = p.product_id";
    return pdo_query($sql);
}


function commentGetDetail($id)
{
  $sql = "SELECT u.fullname,c.content,c.added_on,c.id FROM comments c
    LEFT JOIN users u  ON c.id_user = u.users_id
    where id_pro=?";
  return pdo_query($sql, $id);
}

function commentDelete($id)
{
  $sql = "DELETE FROM `comments` WHERE `id`=$id";
  pdo_execute($sql);
}

?>