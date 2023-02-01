<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="create your own lua plugins for xtremeeliteboot+">
    <title>Lua Script Generator</title>
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container justify-content-center d-flex">
        <h2>Lua Scripts for XtremeBootElite+</h2>
    </div>
    <div class="container justify-content-center d-flex">
    <h5 style="text-align:center;">XtremeEliteBoot+, was developed by <a href="https://github.com/HowlingWolfHWC" target="_blank">HowlingWolfHWC</a>,<br>
    Read the original documentation <a href="original_doc.txt" download>here</a>.</h5>
    </div>
    <div class="container justify-content-center d-flex">

        <div class="container">
            <form action="gerador.php" method="post">
                <div class="mb-3">
                    <label for="plugin-name" class="form-label"><i class="bi bi-plugin"></i> Plugin name</label>
                    <input type="text" class="form-control" name="plugin-name" placeholder="SNESSTATION" required>
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                    <label for="plugin_type" class="form-label"><i class="bi bi-code-square"></i> Type</label>
                    <select class="form-select" id="plugin_type" name="plugin_type" aria-label="Default select example">
                        <option selected>Choose a option</option>
                        <option value="SingleELF">SingleELF</option>
                        <option value="LuaScript">LuaScript</option>
                      </select>
                </div>

                <div class="mb-3">
                <label for="plugin_category" class="form-label"><i class="bi bi-tags-fill"></i> Category</label>
                <select class="form-select" id="plugin_category" name='plugin_category'>
                    <?php
                        $arquivo = file("category.txt");
                        for($i = 0; $i < count($arquivo); $i++) {
                        print "<option value=".$arquivo[$i].">". $arquivo[$i] ."</option>";
                        }
                    ?>
                </select>
                </div>

                <div class="mb-3">
                    <label for="app-name" class="form-label"><i class="bi bi-app"></i> App name</label>
                    <input type="text" class="form-control" name="app-name" placeholder="SnesStation for exhibition" required>
                </div>

                <div class="mb-3">
                <label for="plugin_desc" class="form-label"><i class="bi bi-file-earmark-medical-fill"></i> Description</label>
                <select class="form-select" id="plugin_desc" name='plugin_desc'>
                    <?php
                        $arquivo = file("description.txt");
                        for($i = 0; $i < count($arquivo); $i++) {
                        print "<option value=".$arquivo[$i].">". $arquivo[$i] ."</option>";
                        }
                    ?>
                </select>
                </div>

                <div class="mb-3">
                <label for="plugin_icon" class="form-label"><i class="bi bi-bezier"></i> Icon</label>
                <select class="form-select" id="plugin_icon" name='plugin_icon'>
                    <?php
                        $arquivo = file("icon_list.txt");
                        for($i = 0; $i < count($arquivo); $i++) {
                        print "<option value=".$arquivo[$i].">". $arquivo[$i] ."</option>";
                        }
                    ?>
                </select>
                </div>

                <div class="mb-3">
                <label for="plugin_safe" class="form-label"><i class="bi bi-exclamation-octagon-fill"></i> Plugin safe? is the plugin safe or not? If it is safe, set it to true, 
                    if not, set it to false and it will ask for a keycode if Childproof mode is enabled.</label>
                <select class="form-select" id="plugin_safe" name='plugin_safe'>
                <option selected>Choose a option</option>
                        <option value="true">true</option>
                        <option value="false">false</option>
                    ?>
                </select>
                </div>

                <div class="mb-3">
                    <label for="plugin-path" class="form-label"><i class="bi bi-folder-fill"></i> Path</label>
                    <input type="text" class="form-control" name="plugin-path-1" placeholder="mass:/APPS/BOOT.ELF" required>
                    <input type="text" class="form-control" name="plugin-path-2" placeholder="mass:/APPS/BOOT.ELF" required>
                    <input type="text" class="form-control" name="plugin-path-3" placeholder="mass:/APPS/BOOT.ELF" required>
                </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">clear</button>

            </form>
        </div>

    </div>
</div>
    <div class="container justify-content-center d-flex">
        <footer class="py-3 my-4" >
            <p class="text-center">&copy; Script Lua Generator for XtremeBootElite+ developed by 
            <a href="http://ulissesribeiro.vercel.app" target="_blank" rel="noopener noreferrer" style="text-decoration: none;color: black;">
            Ulisses Ribeiro
            </a>
            </p>
        </footer>
    </div>

</body>

</html>