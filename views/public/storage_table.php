        <div>
            <table>
            <tbody>
                <tr>
                    <td>Storage Location</td>
                    <td>Identifier</td>
                    <td>Title</td>
                    <td>Description</td>
                </tr>
                <?php foreach (loop ('items') as $item): ?>
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
                            echo metadata('item', array('Dublin Core', 'Description'));
                            } ?>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
