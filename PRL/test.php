<?php

move_uploaded_file($_FILES['pic']['tmp_name'], "../imgs/" . $_FILES['pic']['name']);
