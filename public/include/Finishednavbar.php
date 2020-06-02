<script type="text/javascript">

function updateClock ( )
{
 var currentTime = new Date ( );

 var currentHours = currentTime.getUTCHours ( );
 var currentMinutes = currentTime.getUTCMinutes ( );
 var currentSeconds = currentTime.getUTCSeconds ( );

 currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
 currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

 var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

 currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

 currentHours = ( currentHours == 0 ) ? 12 : currentHours;

 var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

 document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}
</script>
<nav class="navbar navbar-inverse navbar-expand-lg navbar-slide-nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./index.php">Ship Manufacturing</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Amarr</span> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Magnate</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Executioner</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Inquisitor</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Tormentor</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Punisher</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Navy Frigate</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Crucifier Navy Issue</a></li>
                                <li><a href="Trigger">Imperial Navy Slicer</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Interceptor</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Crusader</a></li>
                          			<li><a href="Trigger">Malediction</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Assault Frigate</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Retribution</a></li>
                          			<li><a href="Trigger">Vengeance</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Covert Ops</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Anathema</a></li>
                          			<li><a href="Trigger">Purifier</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Electronic Attack Ship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Sentinel</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Logistic Frigates</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Deacon</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Coercer</a></li>
                                <li><a href="Trigger">Dragoon</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Interdictor</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="Trigger">Heretic</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Command Destroyers</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="Trigger">Pontifex</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Tactical Destoryer</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="Trigger">Confessor</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Maller</a></li>
                                <li><a href="Trigger">Omen</a></li>
                                <li><a href="Trigger">Augoror</a></li>
                                <li><a href="Trigger">Arbitrator</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Navy Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Scythe Fleet Issue</a></li>
                          			<li><a href="Trigger">Stabber Fleet Issue</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Recon Ship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Curse</a></li>
                          			<li><a href="Trigger">Pilgrim</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Heavy Assault Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Zealot</a></li>
                          			<li><a href="Trigger">Sacrilege</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Logistics Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Guardian</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Strategic Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Legion</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Prohecy</a></li>
                                <li><a href="Trigger">Harbinger</a></li>
                                <li><a href="Trigger">Oracle</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Navy Battleship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                	<li><a href="Trigger">Harbringer Navy Issue</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Command Ships</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Absolution</a></li>
                                <li><a href="Trigger">Damnation</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                              Tactical Destoryer</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Confessor</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Battleship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Apocalypse</a></li>
                                <li><a href="Trigger">Armageddon</a></li>
                                <li><a href="Trigger">Abaddon</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Navy Battleship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Armageddon Navy Issue</a></li>
                          			<li><a href="Trigger">Apocalypse Navy Issue</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Black Ops</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Redeemer</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Marauder</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Paladin</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Dreadnought</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="Trigger">Revelation</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Carrier</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Apostle</a></li>
                                <li><a href="Trigger">Aeon</a></li>
                                <li><a href="Trigger">Archon</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Titan</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="Trigger">Avatar</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
              </ul>
          </li>
          <!-- Copy here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Caldari State</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Gallante Federation</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Minmatar Republic</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Ore</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Guristas Pirates</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Sansha's Nation</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Blood Raider Covenant</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Angel Cartel</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Serpentis</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Servant Sisters of Eve</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Mordu's Legion Command</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Triglavian Collective</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier2</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->


      </ul>
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text"><body onload="updateClock(); setInterval('updateClock()', 1000 )"><a id="clock" style="color:white">&nbsp;</a></p>
          <?php
          $loggedIn=intval((isset($_SESSION['user_id'])
          &&
          !empty($_SESSION['user_id'])));
          if($loggedIn===0)
          {
           echo('
          <li class="disabled"><a href="#">Login</a></li>
          <li class="disabled"><a href="#">Register</a></li>');
          }
          else {
           echo('
           <li class="disabled"><a href="#">Logout</a></li>
           <li class="disabled"><a href="#">My Account</a></li>');
          }
          ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
