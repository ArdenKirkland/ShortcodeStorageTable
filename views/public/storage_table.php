<div>
    <table>
        <?php foreach($items as $item): ?>
            <tr>
            <td><?php echo item('Item Type Metadata', 'Storage Location'); ?></td>
            <td><?php echo item('Dublin Core', 'Identifier'); ?></td>
            <td><?php echo item('Dublin Core', 'Title'); ?></td>
            <td><?php echo item('Dublin Core', 'Description'); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
