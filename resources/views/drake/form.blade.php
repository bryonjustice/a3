{{-- /resources/views/drake/form.blade.php --}}
@extends('layouts.master')

@push('header')
    <h1>Are we alone?</h1>
@endpush

@section('content')
    <!-- INTRO SECTION -->
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 intro">
            <p class="lead">Humanity has often wondered if there is evidence of
            life in the universe beyond our own. Dr. Frank Drake, an American
            astronomer and astrophysicist, was one of the pioneers in the search
            for extraterrestrial intelligence.  He helped to found
            <a href="http://www.seti.org/">SETI</a>, perform many of the
            earliest observational attempts to detect extraterrestrial
            communication and he developed the Drake Equation, a formula to
            estimate the number of active, communicative extraterrestrial
            civilizations in our galaxy.
            </p>
        </div>
        <div class="col-md-1"></div>
    </div>

    <!-- EXPLAIN EQUATION SECTION -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 formula">
            <h2>Drake equation<br />
                <small>
                N = R* • f<sub>p</sub> • n<sub>e</sub> • f<sub>l</sub> • f
                <sub>i</sub> • f<sub>c</sub> • L
                </small>
            </h2>
        </div>
        <div class="col-md-2"></div>
    </div>
    <br />

    <!-- WARNING / ALERT SECTION -->
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 formula">
                <div class='alert alert-danger'>We are sorry.  Your form could
                not be submitted. Please correct the following fields:<br />
                    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <br />
    @endif


    <!-- USER INPUT SECTION -->
    <div class="row">
        <div class="col-md-2"></div>

        <!-- FORM :: BEGIN -->
        <div class="col-md-8 modal-content"><br />
            <form method="GET" action="process">

            <!-- 1. SELECT R VALUE -->
            <div class="form-group">
                <label for="step1">Step 1: Enter the Average Rate of Star
                Formation in our Galaxy</label>
                <span>(required) *</span>

                <p class="hint">In 1961, Dr. Drake and his collegues originally
                provided a conservative estimate of this value at one star per
                year. Current calculations from NASA and the European Space
                Agency provide estimates of star formation between 1.5 - 3 stars
                per year.
                </p>
                <select class="form-control" name="step1" id="step1" required>
                    <option value="">
                    STEP 1 - SELECTION NEEDED
                    </option>
                    <option value="1.0"
                        {{ (old('step1') == 1.0) ? 'SELECTED' : '' }}>
                        1 star.  Original estimate
                    </option>
                    <option value="1.5"
                        {{ (old('step1') == 1.5) ? 'SELECTED' : '' }}>
                        1.5 stars. Current NASA/ESA minimum estimate
                    </option>
                    <option value="2.0"
                        {{ (old('step1') == 2.0) ? 'SELECTED' : '' }}>
                        2 stars.
                    </option>
                    <option value="2.5"
                        {{ (old('step1') == 2.5) ? 'SELECTED' : '' }}>
                        2.5 stars.
                    </option>
                    <option value="3.0"
                        {{ (old('step1') == 3.0) ? 'SELECTED' : '' }}>
                        3 stars.  Current NASA/ESA maximum estimate
                    </option>
                </select>
            </div>
            <br />

            <!-- 2. RADIO fp VALUE -->
            <div class="form-group">
                <label>Step 2: What fraction of stars in the galaxy have planets
                </label>
                <span>(required) *</span>

                <p class="hint">Early estimates believed this figure was between
                one fifth to half of all stars had planets. Recent discoveries
                suggest this number is closer to 100%. Exoplanets are being
                found around every star.
                </p>

                <div class="row">
                    <div class="col-md-3">
                        <input type="radio" name="step2" value="0.1"
                            {{ (old('step2') == 0.1) ? 'CHECKED' : '' }}>10%
                    </div>

                    <div class="col-md-3">
                        <input type="radio" name="step2" value="0.2"
                            {{ (old('step2') == 0.2) ? 'CHECKED' : '' }}>20%
                    </div>

                    <div class="col-md-3">
                        <input type="radio" name="step2" value="0.3"
                            {{ (old('step2') == 0.3) ? 'CHECKED' : '' }}>30%
                    </div>

                    <div class="col-md-3">
                        <input type="radio" name="step2" value="0.4"
                            {{ (old('step2') == 0.4) ? 'CHECKED' : '' }}>40%
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <input type="radio" name="step2" value="0.5"
                            {{ (old('step2') == 0.5) ? 'CHECKED' : '' }}>50%
                    </div>

                    <div class="col-md-3">
                        <input type="radio" name="step2" value="0.6"
                            {{ (old('step2') == 0.6) ? 'CHECKED' : '' }}>60%
                    </div>

                    <div class="col-md-3">
                        <input type="radio" name="step2" value="0.7"
                            {{ (old('step2') == 0.7) ? 'CHECKED' : '' }}>70%
                    </div>

                    <div class="col-md-3">
                        <input type="radio" name="step2" value="0.8"
                            {{ (old('step2') == 0.8) ? 'CHECKED' : '' }}>80%
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <input type="radio" name="step2" value="0.9"
                            {{ (old('step2') == 0.9) ? 'CHECKED' : '' }}>90%
                    </div>

                    <div class="col-md-9">
                        <input type="radio" name="step2" value="1.0"
                            {{ (old('step2') == 1.0) ? 'CHECKED' : '' }}>
                            100% (Current research states that this is likely
                            the rule)<br>
                    </div>
                </div>
            </div>
            <br />

            <!-- 3. INPUT ne VALUE -->
            <div class="form-group">
                <label for="step3">Step 3: Average number of planets per star
                that can potentially support life</label>
                <span>(required) *</span>

                <p class="hint">The original estimates forecast between 1 to 5
                planets. Data from the Kepler space observatory and other
                scientific discoveries have challenged scientists to revise
                calculations and to weigh other considerations in their
                evaluations of the number planets that may exist within
                'habitable' zones.  Kepler space mission data would suggest this
                number is roughly 0.4.
                </p>
                <input type="text" name="step3" id="step3"
                    value="{{ old('step3') }}"
                    placeholder="example: 0.4" required>
            </div>
            <br />

            <!-- 4. INPUT fl VALUE -->
            <div class="form-group">
                <label for="step4">Step 4: Fraction of those planets that
                actually develop life
                </label>
                <span>(required) *</span>

                <p class="hint">Drake's initial calculation estimated that 100
                percent of all planets that could develop life would develop
                life.  Valid entries range from 0.0001 to 1.0.
                </p>
                <input type="text" name="step4" id="step4"
                    value="{{ old('step4') }}"
                    placeholder="example: 1.0" required>
                </div>
                <br />

            <!-- 5. INPUT fi VALUE -->
            <div class="form-group">
                <label for="step5">Step 5: Fraction of planets bearing life on
                which intelligent, civilized life, has developed
                </label>
                <span>(required) *</span>

                <p class="hint">Drake, also optimistically, assumed that 100
                percent of these planets would eventually develop intelligent
                life. Valid entries range from 0.0001 to 1.0.
                </p>
                <input type="text" name="step5" id="step5"
                    value="{{ old('step5') }}"
                    placeholder="example: 1.0" required>
            </div>
            <br />

            <!-- 6. INPUT fc VALUE -->
            <div class="form-group">
                <label for="step6">Step 6: Fraction of those civilizations that
                have developed communications
                </label>
                <span>(required) *</span>

                <p class="hint">Drake's calculation projected that between
                10-20% of intelligent life would communicate. Valid entries
                range from 0.0001 to 1.0.
                </p>
                <input type="text" name="step6" id="step6"
                    value="{{ old('step6') }}"
                    placeholder="example: 0.2" required>
            </div>
            <br />

            <!-- 7. INPUT L VALUE -->
            <div class="form-group">
                <label for="step7">Step 7: Length of time over which such
                civilizations release detectable signals into space
                </label>
                <span >(required) *</span>

                <p class="hint">The original estimates forecasted between
                1000-100,000,000 years.  Figures can be wildly different.
                Enter your best hypothesis.
                </p>
                <input type="text" name="step7" id="step7"
                    value="{{ old('step7') }}"
                    placeholder="example: 320.0" required>
            </div>

                <!-- SUBMIT FORM -->
                <input type="submit" class="btn btn-primary btn-small">
                <br />
                <br />
                <br />
            </form>
        </div>
        <!-- FORM :: END -->

        <div class="col-md-2"></div>
    </div>
@endsection
