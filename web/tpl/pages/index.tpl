<div>
    <table>
    <tr>
        <th>Name<th>
        <th>Price<th>
        <th>Description<th>
    </tr>
    {foreach from=products item=product}
    <tr>
        <td>{$product['name']}<td>
        <td>{$product['price']}<td>
        <td>{$product['description']}<td>
    </tr>
    {/foreach}
</div>