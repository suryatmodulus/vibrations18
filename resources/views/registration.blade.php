@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <img class="text-logo img-responsive center-block" src="{{ asset('images/small_text_logo.png') }}" alt="">
        </div>
        <div class="col-md-4 col-md-offset-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="POST" action="{{ route('registration.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Full Name :</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your Name" required autocomplete="off" autofocus/>
                        </div>

                        <div class="form-group">
                            <label for="usn">USN (Students only) :</label>
                            <input type="text" class="form-control" name="usn" placeholder="Faculty can leave this blank" maxlength="15" autocomplete="off"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address"required autocomplete="off"/>
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile Number :</label>
                            <input type="number" class="form-control" name="mobile" placeholder="10 digit number" oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="10" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <div class="control-group">
                                <h2>DANCE</h2>
                                <label class="control control--checkbox">Solo Western/Bollywood
                                    <input class="chk" type="checkbox" name="events[]" value="dance|solo_western_bollywood"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Solo Eastern/Classical
                                    <input class="chk" type="checkbox" name="events[]" value="dance|solo_eastern_classical"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Group Western/Bollywood
                                    <input class="chk" type="checkbox" name="events[]" value="dance|group_western_bollywood"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Group Eastern/Classical
                                    <input class="chk" type="checkbox" name="events[]" value="dance|group_eastern_classical"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{-------------}}
                                <hr>
                                <h2>Fashion</h2>
                                <label class="control control--checkbox">Fashion Show
                                    <input class="chk" type="checkbox" name="events[]" value="fashion|fashion_show"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Mr & Ms Vibrations
                                    <input class="chk" type="checkbox" name="events[]" value="fashion|mr_ms_vibrations"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{-------------}}
                                <hr>
                                <h2>Music</h2>
                                <label class="control control--checkbox">Regional Vocal Solo
                                    <input class="chk" type="checkbox" name="events[]" value="music|regional_vocal_solo"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Western Vocal Solo
                                    <input class="chk" type="checkbox" name="events[]" value="music|western_vocal_solo"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Instrument Solo
                                    <input class="chk" type="checkbox" name="events[]" value="music|instrument_solo"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Eastern Group
                                    <input class="chk" type="checkbox" name="events[]" value="music|eastern_group"/>
                                    <div class="control__indicator"></div>
                                </label><label class="control control--checkbox">Western Group
                                    <input class="chk" type="checkbox" name="events[]" value="music|western_group"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{-------------}}
                                <hr>
                                <h2>Literary</h2>
                                <label class="control control--checkbox">Debate Kannada/English
                                    <input class="chk" type="checkbox" name="events[]" value="literary|debate"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">The Literary Triathlon
                                    <input class="chk" type="checkbox" name="events[]" value="literary|the_literary_triathlon"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Lit Hunt
                                    <input class="chk" type="checkbox" name="events[]" value="literary|lit_hunt"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Gyaana Prathib Sparde
                                    <input class="chk" type="checkbox" name="events[]" value="literary|gyaana_prathib_sparde"/>
                                    <div class="control__indicator"></div>
                                </label><label class="control control--checkbox">Pick & Speak Kan/Eng/Hindi
                                    <input class="chk" type="checkbox" name="events[]" value="literary|pick_and_speak"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Blackout Poetry
                                    <input class="chk" type="checkbox" name="events[]" value="literary|blackout_poetry"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{-------------}}
                                <hr>
                                <h2>Art</h2>
                                <label class="control control--checkbox">Aquarelle-Watercolour Painting
                                    <input class="chk" type="checkbox" name="events[]" value="art|aquarelle_watercolour_painting"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Sketcho-Mania Sketching
                                    <input class="chk" type="checkbox" name="events[]" value="art|sketcho_mania_sketching"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Fix-the-Blot Ink Art
                                    <input class="chk" type="checkbox" name="events[]" value="art|fix_the_blot_ink_art"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{-------------}}
                                <hr>
                                <h2>Theatre</h2>
                                <label class="control control--checkbox">Mad Ads
                                    <input class="chk" type="checkbox" name="events[]" value="theatre|mad_ads"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Stand-Up Comedy
                                    <input class="chk" type="checkbox" name="events[]" value="theatre|stand_up_comedy"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Skit
                                    <input class="chk" type="checkbox" name="events[]" value="theatre|skit"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Improv
                                    <input class="chk" type="checkbox" name="events[]" value="theatre|improv"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{-------------}}
                                <hr>
                                <h2>Faculty Events</h2>
                                <label class="control control--checkbox">Dance Group & Solo
                                    <input class="chk" type="checkbox" name="events[]" value="faculty|dance_group_solo"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Singing Group & Solo
                                    <input class="chk" type="checkbox" name="events[]" value="faculty|singing_group_solo"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Talent Show
                                    <input class="chk" type="checkbox" name="events[]" value="faculty|talent_show"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Rangoli
                                    <input class="chk" type="checkbox" name="events[]" value="faculty|rangoli"/>
                                    <div class="control__indicator"></div>
                                </label><label class="control control--checkbox">Cooking Without Fire
                                    <input class="chk" type="checkbox" name="events[]" value="faculty|cooking_without_fire"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">DSI Minute
                                    <input class="chk" type="checkbox" name="events[]" value="faculty|dsi_minute"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{-------------}}
                                <hr>
                                <h2>Photography</h2>
                                <label class="control control--checkbox">Mobile Photography
                                    <input class="chk" type="checkbox" name="events[]" value="photography|mobile_photography"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Story Telling
                                    <input class="chk" type="checkbox" name="events[]" value="photography|story_telling"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{-------------}}
                                <hr>
                                <h2>Emcee</h2>
                                <label class="control control--checkbox">War of Emcees
                                    <input class="chk" type="checkbox" name="events[]" value="emcee|war_of_emcees"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{-------------}}
                                <hr>
                                <h2>Miscellaneous Events</h2>
                                <label class="control control--checkbox">Cooking Without Fire
                                    <input class="chk" type="checkbox" name="events[]" value="misc|cooking_without_fire"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Kannada Antakshari
                                    <input class="chk" type="checkbox" name="events[]" value="misc|kannada_antakshari"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Rubiks Cube
                                    <input class="chk" type="checkbox" name="events[]" value="misc|rubiks_cube"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Treasure Hunt
                                    <input class="chk" type="checkbox" name="events[]" value="misc|treasure_hunt"/>
                                    <div class="control__indicator"></div>
                                </label><label class="control control--checkbox">PUBG
                                    <input class="chk" type="checkbox" name="events[]" value="misc|pubg"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">DSI Super Minute
                                    <input class="chk" type="checkbox" name="events[]" value="misc|dsi_super_minute"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Hogathon
                                    <input class="chk" type="checkbox" name="events[]" value="misc|hogathon"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox">Rangoli
                                    <input class="chk" type="checkbox" name="events[]" value="misc|rangoli"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{--------}}
                                <hr>
                                <h2>Selected Events :</h2>
                                <ul id="selected_events">

                                </ul>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button id="submit_btn" type="submit" class="register-btn disabled-btn" disabled>
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
