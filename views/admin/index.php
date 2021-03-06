<!--right half page-->
<div class="col50"> 
    <?php if($this->news) { ?>
    <table id="newsTable">
        <th>News</th>
        <th>Date refresh</th>
        <th></th>
        <th></th>
        <th></th>
        <?php foreach ($this->news as $news) : ?>
            <tr id="<?= $news->getId() ?>">
                <td><?= $news->getTitle() ?></td>
                <td><?= $news->getDate() ?></td>
                <td> <a href="#" onclick="selectAjax(<?= $news->getId() ?>)"> update</a></td>
                <td><a href="#" onclick="deleteAjax(<?= $news->getId() ?>)"> delete </a></td>
                <td><a href="#"  onclick="viewAddForm()">add</a></td>
            </tr>
        <?php endforeach; ?>

    </table>
    <?php } else { ?>
        <button href="#"  onclick="viewAddForm()">add new data of news</button>
    <?php } ?>
</div>
<!-- /right half page-->

<!--left half page-->
<div class="col50" >
    
    <form id="form">
        
        <input type="hidden" id="type" name="type" value="add">
        <input type="hidden" id="id" name="id" value="">
        <label for="title">Title</label>
        <input name="title" id ="title" type="text" size="100">
        <label for="title">News data</label>
        <textarea  name="text" id="text" cols="75" rows="10"></textarea>
        <p></p>
        <input type="button" value="Save"  onclick="saveAjax()">
    </form>
</div>
<!--/left half page-->

<script src="/public/js/functions.js"></script>
