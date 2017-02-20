<div class="left">
    <form id="form">
        <label for="minTripStartDate">Date start's before:</label><br>
        <input name="minTripStartDate" type="text" class="datepicker form-control" value="<?php echo $filters['minTripStartDate']; ?>"><br>
        <label for="maxTripStartDate">Date start's after:</label><br>
        <input name="maxTripStartDate" type="text" class="datepicker form-control" value="<?php echo $filters['maxTripStartDate']; ?>"><br>
        <label for="lengthOfStay">Length of stay:</label><br>
        <input id="lengthOfStay" name="lengthOfStay" class="form-control" type="number" min="1" value="<?php echo $filters['lengthOfStay']; ?>"><br>
        <label for="destinationCity">Destination city:</label><br>
        <input name="destinationCity" type="text" class="form-control" value="<?php echo $filters['destinationCity']; ?>"><br>

        <label>Min rate:</label><br>
        <input type="radio" name="minStarRating" value="1" <?php echo ($filters['minStarRating'] == 1) ? "checked" : ""; ?>>
        <label for="minStarRating"><span>★</span></label><br>
        <input type="radio" name="minStarRating" value="2" <?php echo ($filters['minStarRating'] == 2) ? "checked" : ""; ?>>
        <label for="minStarRating"><span>★</span><span>★</span></label><br>
        <input type="radio" name="minStarRating" value="3" <?php echo ($filters['minStarRating'] == 3) ? "checked" : ""; ?>>
        <label for="minStarRating"><span>★</span><span>★</span><span>★</span></label><br>
        <input type="radio" name="minStarRating" value="4" <?php echo ($filters['minStarRating'] == 4) ? "checked" : ""; ?>>
        <label for="minStarRating"><span>★</span><span>★</span><span>★</span><span>★</span></label><br>
        <input type="radio" name="minStarRating" value="5" <?php echo ($filters['minStarRating'] == 5) ? "checked" : ""; ?>>
        <label for="minStarRating"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></label><br>

        <label>Max rate:</label><br>
        <input type="radio" name="maxStarRating" value="1" <?php echo ($filters['maxStarRating'] == 1) ? "checked" : ""; ?>>
        <label for="maxStarRating"><span>★</span></label><br>
        <input type="radio" name="maxStarRating" value="2" <?php echo ($filters['maxStarRating'] == 2) ? "checked" : ""; ?>>
        <label for="maxStarRating"><span>★</span><span>★</span></label><br>
        <input type="radio" name="maxStarRating" value="3" <?php echo ($filters['maxStarRating'] == 3) ? "checked" : ""; ?>>
        <label for="maxStarRating"><span>★</span><span>★</span><span>★</span></label><br>
        <input type="radio" name="maxStarRating" value="4" <?php echo ($filters['maxStarRating'] == 4) ? "checked" : ""; ?>>
        <label for="maxStarRating"><span>★</span><span>★</span><span>★</span><span>★</span></label><br>
        <input type="radio" name="maxStarRating" value="5" <?php echo ($filters['maxStarRating'] == 5) ? "checked" : ""; ?>>
        <label for="maxStarRating"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></label><br>
        <input type="submit" value="Filter" class="btn btn-success">
        <input type="button" id="reset" value="Reset" class="btn btn-danger">
    </form>
</div>