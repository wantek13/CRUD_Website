<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
            <?php if(!empty($festival['id'])): ?>
                Modifier festival : <strong><?php echo $festival['nom']?></strong>
            <?php else: ?>
                Ajouter un nouveau festival :
            <?php endif; ?>
            </h3>
        </div>
        <div class="card-body">

            <form action="" method="POST" enctype="multipart/form-data">
                <!-- --------image--------- -->
                <div class="form-group">
                    <label>Image</label>
                    <input name="img" value="<?php echo $festival['img']?>" class="form-control" placeholder="Enter Image URL" required>
                </div>
                <!-- ---nom----- -->
                <div class="form-group">
                    <label>Nom</label>
                    <input name="nom" value="<?php echo $festival['nom']?>" class="form-control" placeholder="the name of the festival with year" required>
                </div>

                <div class="form-group">
                    <label>Video</label>
                    <input name="video" value="<?php echo $festival['video']?>" class="form-control" placeholder="Enter youtube Video URL" required>
                </div>

                <!-- ---festival----- -->
                <div class="form-group">
                    <label>Festival / Event</label>
                    <select id="festival" name="festival" class="form-control">
                        <option value="defqon1">Defqon 1</option>
                        <option value="decibel">Decibel</option>
                        <option value="dominator">Dominator</option>
                        <option value="hoh">Harmony of Hardcore</option>
                        <option value="ground_zero">Ground Zero</option>
                        <option value="intents_festival">Intents Festival</option>
                        <option value="moh">Masters of Hardcore</option>
                        <option value="reverze">Reverze</option>
                        <option value="qapital">Qapital</option>
                        <option value="syndicate">Syndicate</option>
                        <option value="i_am_hardstyle">I am Hardstyle</option>
                        <option value="qlimax">Qlimax</option>
                        <option value="imagination_festival">Imagination Festival</option>
                    </select>
                </div>
                
                <!-- --------bouton-------- -->
                <button class="btn btn-success">Valider</button>
            </form>

        </div>
    </div>
</div>