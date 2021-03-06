        <div class="storagetable">
            <table>
            <tbody>
                <tr>
                    <th>Storage Location</td>
                    <th>Identifier</td>
                    <th>Title</td>
                    <th>Description</td>
                </tr>
                <?php set_loop_records('items', $items);
                    foreach (loop ('items') as $item): ?>
                    <tr>
                    <td>
                        <?php if (metadata('item', array('Item Type Metadata', 'Storage Location')) !='') {
                            echo metadata('item', array('Item Type Metadata', 'Storage Location'));
                            } ?>
                    </td>
                    <td>
                        <?php if (metadata('item', array('Dublin Core', 'Identifier')) !='') {
                            echo metadata('item', array('Dublin Core', 'Identifier'));
                            } ?>
                    </td>
                    <td>
                        <?php if (metadata('item', array('Dublin Core', 'Title')) !='') {
                            echo metadata('item', array('Dublin Core', 'Title'));
                            } ?>
                    </td>
                    <td>
                        <?php if (metadata('item', array('Dublin Core', 'Description')) !='') {
                            echo metadata('item', array('Dublin Core', 'Description'), array('snippet' => 150));
                            } ?>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
