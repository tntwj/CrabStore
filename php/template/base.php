<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["title"]; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sticky-top">
        <header class="row justify-content-center align-items-center">
            <img src="<?php echo $templateParams["logo"];?> " class="col-sm-1" alt="Logo"/>
            <div class="col-sm-3">
                <h1 class="text-center">CRABAPPLE</h1>
                <p class="text-center fst-italic text-secondary">Pinch Perfect Tech for Everyone</p>
            </div>
        </header>
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <ul class="navbar-nav mx-auto"> 
                    <li class="nav-item"><a class="nav-link" href="#">Computers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Laptops</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Phones</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tablets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Headphones</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Watches</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Accessories</a></li>
                </ul>
                
                <div class="d-flex gap-3">
                        <a href="#">
                            <img src="<?php echo $templateParams['notify-base']; ?>" alt="Notifications" />
                        </a>
                        
                        <div class="dropstart">
                            <img src="<?php echo $templateParams['menu']; ?>" alt="dropdownmenu-image" class="dropdown-toggle" data-bs-toggle="dropdown"/>
                            <ul class="dropdown-menu " aria-labelledby="navbarDarkDropdownMenuLink">
                                <li>    
                                        <a class="dropdown-item" href="#">
                                            <img src="<?php echo $templateParams['menu-account']; ?>" alt="User Page" class="sm-2">
                                            User Page
                                        </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="<?php echo $templateParams['notify-base']; ?>" alt="Notifications" />
                                        Notifications
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"/></li>
                                <li>
                                    <a class="dropdown-item gap-3" href="#">
                                        <img src="<?php echo $templateParams['menu-cart']; ?>" alt="Cart" />
                                        Cart</a>
                                </li>
                                
                            </ul>
                        </div>
                </div>
            </div>
        </nav>
    </div>
    
    <main class="container-fluid">
        <h2>Main Content</h2>
        <p>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nibh blandit, fringilla nisl a, posuere nulla. Nulla egestas neque in aliquam lobortis. Vestibulum egestas lacus hendrerit tincidunt dictum. Fusce condimentum ex eget urna faucibus varius. Nam finibus accumsan augue, vel sagittis lacus. Morbi aliquet mi sed turpis congue pulvinar. Fusce blandit auctor risus, quis vehicula velit. Aenean fermentum ligula malesuada nunc placerat, sed finibus nisi malesuada.

            Nulla egestas sagittis auctor. Aenean viverra dui tortor, id consectetur eros volutpat id. Mauris mauris justo, convallis et diam fringilla, hendrerit consequat urna. Sed risus augue, posuere nec cursus sed, blandit mollis leo. Mauris libero felis, rutrum sed arcu sit amet, facilisis interdum erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam sit amet sollicitudin quam. Aliquam erat volutpat. Nunc eu tempus quam. Mauris fringilla, ex varius interdum rhoncus, magna enim facilisis massa, nec ornare turpis quam sed arcu. Proin auctor metus sit amet leo scelerisque, porttitor ornare mi rutrum. Sed ut nisl nec nisi blandit consectetur. Integer posuere aliquet tincidunt. Vivamus elementum, lectus in rutrum hendrerit, ante mauris iaculis metus, ut iaculis dui metus non orci.

            Pellentesque ac sagittis lorem. Donec tincidunt rhoncus nibh. Cras massa tellus, gravida a dui vitae, pulvinar vehicula erat. Aliquam elementum convallis orci non scelerisque. Cras elit enim, aliquam a magna ut, volutpat mollis erat. Quisque imperdiet pharetra ultricies. Etiam vitae orci est. Aliquam in tincidunt orci, consequat tempus purus. Mauris sit amet lorem in diam tincidunt sodales facilisis non nunc.

            Sed luctus aliquet dignissim. Curabitur nec aliquam risus. Vivamus ornare, sem sed condimentum lacinia, nunc neque dignissim dolor, a finibus quam urna eu tellus. Donec fringilla nulla viverra, tristique est eu, faucibus dui. Nam vel ex nibh. Pellentesque blandit metus id velit sodales rhoncus. Nullam semper sit amet nulla ut tempor. Integer accumsan ullamcorper bibendum. Cras rutrum ex sed varius tempus. Cras ornare augue id metus vulputate euismod. Suspendisse vitae lacus ut erat tempus porttitor vitae vitae risus. Donec leo lacus, posuere at vulputate sit amet, consequat vitae urna.

            Donec neque nisl, ultricies a ex et, viverra maximus ipsum. Aliquam egestas lobortis neque imperdiet ultrices. Vivamus nunc ligula, hendrerit non euismod posuere, mattis pretium justo. Ut ultricies pulvinar metus sed dictum. Morbi sed metus eu lacus sagittis elementum. Nam convallis lectus non mattis porttitor. Maecenas vel dolor sed elit laoreet interdum sed et lacus. Nam sed elit non neque scelerisque vestibulum at ac enim. Maecenas eget lorem sagittis, pretium lorem vitae, aliquet erat. Aliquam rhoncus justo leo, eu placerat lorem tincidunt sit amet. Proin ultrices lacinia metus, sed interdum est posuere non.

            Nullam iaculis cursus tellus, vel sagittis lorem ornare sed. Donec dignissim ex eros, cursus sodales massa elementum eu. Nulla dolor quam, facilisis ac aliquam eget, sollicitudin facilisis dui. Nulla facilisi. Etiam vel sapien viverra, convallis lectus id, cursus risus. Mauris pharetra dui vitae tincidunt convallis. Sed faucibus, est in consequat volutpat, erat arcu consequat turpis, ut ornare nunc urna in neque. Curabitur volutpat ex quis congue aliquet.

            Duis orci diam, lobortis eu maximus a, viverra blandit lectus. Fusce feugiat neque et tincidunt vestibulum. Nulla pretium eros sed sapien convallis lacinia. Quisque auctor felis nibh, convallis dignissim est mollis sed. Ut consequat id velit a scelerisque. Pellentesque semper felis non pulvinar egestas. Vivamus elit lectus, varius vitae pharetra sed, scelerisque et mauris. Quisque maximus purus vel placerat commodo. Fusce commodo elit quis tortor hendrerit, eget varius elit congue. Praesent commodo augue sit amet mi condimentum, nec interdum urna sagittis. Vivamus tempus erat eu fermentum luctus. Etiam eu nulla sed est pellentesque maximus vitae at lacus. In egestas luctus mi vel ullamcorper. Proin lobortis vestibulum vestibulum. Duis ac ex dolor. Suspendisse commodo, nulla id interdum convallis, sem mi tristique ex, vel pulvinar quam elit ut risus.

            Curabitur tristique et mi id malesuada. Cras iaculis imperdiet neque vitae venenatis. Praesent mollis condimentum hendrerit. Integer eleifend nec velit quis molestie. Nullam pharetra ante a ex convallis laoreet. Phasellus sagittis rhoncus felis, ut laoreet mi placerat quis. Integer dapibus metus pulvinar porta fringilla. Cras vel tincidunt odio. Vestibulum eu metus faucibus, ultricies mi in, viverra metus. Mauris pellentesque nisl non magna egestas placerat. Aenean varius finibus leo, vel mattis mi fermentum vel.

            Mauris nunc massa, viverra at dignissim ut, fringilla et sapien. Curabitur nec ullamcorper nisl. Phasellus sodales arcu a tortor finibus elementum. Maecenas sodales ante eget risus mattis malesuada efficitur dapibus sem. Donec vel velit ac massa dictum interdum. Sed mattis quam eget magna blandit sodales. Donec in condimentum ex. Nam laoreet, magna sed pulvinar aliquam, sapien lectus sagittis eros, eu consequat tellus dui et augue. Quisque congue arcu sit amet ex interdum egestas. Nulla magna justo, congue eu turpis at, faucibus facilisis nulla. Cras at est commodo, elementum mauris id, ultrices mi. Curabitur efficitur hendrerit purus, sit amet malesuada nibh porta nec. Pellentesque sodales lectus nibh, ut bibendum est dignissim sed.

            Nam condimentum pretium diam, eu imperdiet arcu porta vitae. Mauris accumsan, diam vitae egestas lacinia, urna augue sagittis mi, id ornare mauris metus ac ligula. Quisque nec luctus nisi. Maecenas vitae mauris mauris. Vivamus eu fringilla diam. Nunc pellentesque vehicula felis id efficitur. In tortor erat, facilisis ut pharetra vitae, consectetur eget magna. Proin vitae ipsum massa. Mauris pretium tincidunt varius. Maecenas elementum molestie lacus vel scelerisque. Curabitur at libero posuere ipsum porta mollis. Phasellus sed ante eleifend, feugiat arcu vitae, suscipit orci. Maecenas sit amet velit id orci aliquet porta facilisis ut nunc. Duis porta risus dolor, eget blandit leo aliquam id. Ut vitae urna a ex euismod mollis. Fusce maximus sollicitudin nunc, in suscipit nibh pretium at. 
        </p>
    <?php
        //require($templateParams["nome"]);
    ?>
    </main><aside>
        <section class="container-fluid">
            <h2>News</h2>
            <p>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nibh blandit, fringilla nisl a, posuere nulla. Nulla egestas neque in aliquam lobortis. Vestibulum egestas lacus hendrerit tincidunt dictum. Fusce condimentum ex eget urna faucibus varius. Nam finibus accumsan augue, vel sagittis lacus. Morbi aliquet mi sed turpis congue pulvinar. Fusce blandit auctor risus, quis vehicula velit. Aenean fermentum ligula malesuada nunc placerat, sed finibus nisi malesuada.

            Nulla egestas sagittis auctor. Aenean viverra dui tortor, id consectetur eros volutpat id. Mauris mauris justo, convallis et diam fringilla, hendrerit consequat urna. Sed risus augue, posuere nec cursus sed, blandit mollis leo. Mauris libero felis, rutrum sed arcu sit amet, facilisis interdum erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam sit amet sollicitudin quam. Aliquam erat volutpat. Nunc eu tempus quam. Mauris fringilla, ex varius interdum rhoncus, magna enim facilisis massa, nec ornare turpis quam sed arcu. Proin auctor metus sit amet leo scelerisque, porttitor ornare mi rutrum. Sed ut nisl nec nisi blandit consectetur. Integer posuere aliquet tincidunt. Vivamus elementum, lectus in rutrum hendrerit, ante mauris iaculis metus, ut iaculis dui metus non orci.

            Pellentesque ac sagittis lorem. Donec tincidunt rhoncus nibh. Cras massa tellus, gravida a dui vitae, pulvinar vehicula erat. Aliquam elementum convallis orci non scelerisque. Cras elit enim, aliquam a magna ut, volutpat mollis erat. Quisque imperdiet pharetra ultricies. Etiam vitae orci est. Aliquam in tincidunt orci, consequat tempus purus. Mauris sit amet lorem in diam tincidunt sodales facilisis non nunc.

            Sed luctus aliquet dignissim. Curabitur nec aliquam risus. Vivamus ornare, sem sed condimentum lacinia, nunc neque dignissim dolor, a finibus quam urna eu tellus. Donec fringilla nulla viverra, tristique est eu, faucibus dui. Nam vel ex nibh. Pellentesque blandit metus id velit sodales rhoncus. Nullam semper sit amet nulla ut tempor. Integer accumsan ullamcorper bibendum. Cras rutrum ex sed varius tempus. Cras ornare augue id metus vulputate euismod. Suspendisse vitae lacus ut erat tempus porttitor vitae vitae risus. Donec leo lacus, posuere at vulputate sit amet, consequat vitae urna.

            Donec neque nisl, ultricies a ex et, viverra maximus ipsum. Aliquam egestas lobortis neque imperdiet ultrices. Vivamus nunc ligula, hendrerit non euismod posuere, mattis pretium justo. Ut ultricies pulvinar metus sed dictum. Morbi sed metus eu lacus sagittis elementum. Nam convallis lectus non mattis porttitor. Maecenas vel dolor sed elit laoreet interdum sed et lacus. Nam sed elit non neque scelerisque vestibulum at ac enim. Maecenas eget lorem sagittis, pretium lorem vitae, aliquet erat. Aliquam rhoncus justo leo, eu placerat lorem tincidunt sit amet. Proin ultrices lacinia metus, sed interdum est posuere non.

            Nullam iaculis cursus tellus, vel sagittis lorem ornare sed. Donec dignissim ex eros, cursus sodales massa elementum eu. Nulla dolor quam, facilisis ac aliquam eget, sollicitudin facilisis dui. Nulla facilisi. Etiam vel sapien viverra, convallis lectus id, cursus risus. Mauris pharetra dui vitae tincidunt convallis. Sed faucibus, est in consequat volutpat, erat arcu consequat turpis, ut ornare nunc urna in neque. Curabitur volutpat ex quis congue aliquet.

            Duis orci diam, lobortis eu maximus a, viverra blandit lectus. Fusce feugiat neque et tincidunt vestibulum. Nulla pretium eros sed sapien convallis lacinia. Quisque auctor felis nibh, convallis dignissim est mollis sed. Ut consequat id velit a scelerisque. Pellentesque semper felis non pulvinar egestas. Vivamus elit lectus, varius vitae pharetra sed, scelerisque et mauris. Quisque maximus purus vel placerat commodo. Fusce commodo elit quis tortor hendrerit, eget varius elit congue. Praesent commodo augue sit amet mi condimentum, nec interdum urna sagittis. Vivamus tempus erat eu fermentum luctus. Etiam eu nulla sed est pellentesque maximus vitae at lacus. In egestas luctus mi vel ullamcorper. Proin lobortis vestibulum vestibulum. Duis ac ex dolor. Suspendisse commodo, nulla id interdum convallis, sem mi tristique ex, vel pulvinar quam elit ut risus.

            Curabitur tristique et mi id malesuada. Cras iaculis imperdiet neque vitae venenatis. Praesent mollis condimentum hendrerit. Integer eleifend nec velit quis molestie. Nullam pharetra ante a ex convallis laoreet. Phasellus sagittis rhoncus felis, ut laoreet mi placerat quis. Integer dapibus metus pulvinar porta fringilla. Cras vel tincidunt odio. Vestibulum eu metus faucibus, ultricies mi in, viverra metus. Mauris pellentesque nisl non magna egestas placerat. Aenean varius finibus leo, vel mattis mi fermentum vel.

            Mauris nunc massa, viverra at dignissim ut, fringilla et sapien. Curabitur nec ullamcorper nisl. Phasellus sodales arcu a tortor finibus elementum. Maecenas sodales ante eget risus mattis malesuada efficitur dapibus sem. Donec vel velit ac massa dictum interdum. Sed mattis quam eget magna blandit sodales. Donec in condimentum ex. Nam laoreet, magna sed pulvinar aliquam, sapien lectus sagittis eros, eu consequat tellus dui et augue. Quisque congue arcu sit amet ex interdum egestas. Nulla magna justo, congue eu turpis at, faucibus facilisis nulla. Cras at est commodo, elementum mauris id, ultrices mi. Curabitur efficitur hendrerit purus, sit amet malesuada nibh porta nec. Pellentesque sodales lectus nibh, ut bibendum est dignissim sed.

            Nam condimentum pretium diam, eu imperdiet arcu porta vitae. Mauris accumsan, diam vitae egestas lacinia, urna augue sagittis mi, id ornare mauris metus ac ligula. Quisque nec luctus nisi. Maecenas vitae mauris mauris. Vivamus eu fringilla diam. Nunc pellentesque vehicula felis id efficitur. In tortor erat, facilisis ut pharetra vitae, consectetur eget magna. Proin vitae ipsum massa. Mauris pretium tincidunt varius. Maecenas elementum molestie lacus vel scelerisque. Curabitur at libero posuere ipsum porta mollis. Phasellus sed ante eleifend, feugiat arcu vitae, suscipit orci. Maecenas sit amet velit id orci aliquet porta facilisis ut nunc. Duis porta risus dolor, eget blandit leo aliquam id. Ut vitae urna a ex euismod mollis. Fusce maximus sollicitudin nunc, in suscipit nibh pretium at. 
        </p>
        </section>
    </aside>
    <footer class="py-3">
        <div class="container-fluid justify-content-center text-secondary">
            <p class="text-center text-break">
                Crabapple offers a free 1 day shipping for all items. Once bought the order can't be cancelled.<br/>
                For any inconvenience or question you can call our 0h call service at the following number +99 000 000 0000.<br/>
                Thank you for your cooperation.
            </p>
            <p class="text-center">
                Unless otherwise indicated, all the names or products in this site are complete productions of Crabapple Inc.<br/> Any
                resemblance to products or names of another hypothetical company is purely coincidental.<br/>Crabapple is in no way
                responsible for any legal repercussions for any of the coincidences written above.
            </p >
            <p class="text-center">Copyright © 2024 Crabapple Inc. All rights reserved. | We offer no refunds. Deal with it | Atlantic Ocean</p>
        </div>
    </footer>
</body>
</html>