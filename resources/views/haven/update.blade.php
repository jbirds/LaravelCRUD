@extends('layouts.master')

@section('content')

        <?php $birthday = explode('-', $contact->birthday);
                $year  = $birthday[0];
                $month = $birthday[1];
                $date   = $birthday[2];
                ?>
        <form action="/haven/add" method="POST">
            <input type="hidden" class="form-control" name="id" value="{{$contact->id}}">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{$contact->firstName}}">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="{{$contact->lastName}}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$contact->email}}">
            </div>
            <div class="form-group">
                <label for="phone">Phone </label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{$contact->phone}}">
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <select class="form-control" name="month" >
                    <option value="01" <?php if($month == "01") echo "selected";?> >January</option>
                    <option value="02" <?php if($month == "02") echo "selected";?>>February</option>
                    <option value="03" <?php if($month == "03") echo "selected";?>>March</option>
                    <option value="04" <?php if($month == "04") echo "selected";?>>April</option>
                    <option value="05" <?php if($month == "05") echo "selected";?>>May</option>
                    <option value="06" <?php if($month == "06") echo "selected";?>>June</option>
                    <option value="07" <?php if($month == "07") echo "selected";?>>July</option>
                    <option value="08" <?php if($month == "08") echo "selected";?>>August</option>
                    <option value="09" <?php if($month == "09") echo "selected";?>>September</option>
                    <option value="10" <?php if($month == "10") echo "selected";?>>October</option>
                    <option value="11" <?php if($month == "11") echo "selected";?>>November</option>
                    <option value="12" <?php if($month == "12") echo "selected";?>>December</option>
                </select>
                <select class="form-control" name="date">
                    <option value="01" <?php if($date == "01") echo "selected";?> >01</option>
                    <option value="02" <?php if($date == "02") echo "selected";?> >02</option>
                    <option value="03" <?php if($date == "03") echo "selected";?> >03</option>
                    <option value="04" <?php if($date == "04") echo "selected";?> >04</option>
                    <option value="05" <?php if($date == "05") echo "selected";?> >05</option>
                    <option value="06" <?php if($date == "06") echo "selected";?> >06</option>
                    <option value="07" <?php if($date == "07") echo "selected";?> >07</option>
                    <option value="08" <?php if($date == "08") echo "selected";?> >08</option>
                    <option value="09" <?php if($date == "09") echo "selected";?> >09</option>
                    <option value="10" <?php if($date == "10") echo "selected";?> >10</option>
                    <option value="11" <?php if($date == "11") echo "selected";?> >11</option>
                    <option value="12" <?php if($date == "12") echo "selected";?> >12</option>
                    <option value="13" <?php if($date == "13") echo "selected";?> >13</option>
                    <option value="14" <?php if($date == "14") echo "selected";?> >14</option>
                    <option value="15" <?php if($date == "15") echo "selected";?> >15</option>
                    <option value="16" <?php if($date == "16") echo "selected";?> >16</option>
                    <option value="17" <?php if($date == "17") echo "selected";?> >17</option>
                    <option value="18" <?php if($date == "18") echo "selected";?> >18</option>
                    <option value="19" <?php if($date == "19") echo "selected";?> >19</option>
                    <option value="20" <?php if($date == "20") echo "selected";?> >20</option>
                    <option value="21" <?php if($date == "21") echo "selected";?> >21</option>
                    <option value="22" <?php if($date == "22") echo "selected";?> >22</option>
                    <option value="23" <?php if($date == "23") echo "selected";?> >23</option>
                    <option value="24" <?php if($date == "24") echo "selected";?> >24</option>
                    <option value="25" <?php if($date == "25") echo "selected";?> >25</option>
                    <option value="26" <?php if($date == "26") echo "selected";?> >26</option>
                    <option value="27" <?php if($date == "27") echo "selected";?> >27</option>
                    <option value="28" <?php if($date == "28") echo "selected";?> >28</option>
                    <option value="29" <?php if($date == "29") echo "selected";?> >29</option>
                    <option value="30" <?php if($date == "30") echo "selected";?> >30</option>
                    <option value="31" <?php if($date == "31") echo "selected";?> >31</option>
                </select>

                <select class="form-control" name="year">
                    <option value="1990" <?php if($year == "1990") echo "selected";?> >1990</option>
                    <option value="1991" <?php if($year == "1991") echo "selected";?> >1991</option>
                    <option value="1992" <?php if($year == "1992") echo "selected";?>>1992</option>
                    <option value="1993" <?php if($year == "1993") echo "selected";?>>1993</option>
                    <option value="1994" <?php if($year == "1994") echo "selected";?>>1994</option>
                    <option value="1995" <?php if($year == "1995") echo "selected";?>>1995</option>
                    <option value="1996" <?php if($year == "1996") echo "selected";?>>1996</option>
                    <option value="1997" <?php if($year == "1997") echo "selected";?>>1997</option>
                    <option value="1998" <?php if($year == "1998") echo "selected";?>>1998</option>
                    <option value="1999" <?php if($year == "1999") echo "selected";?>>1999</option>
                    <option value="2000" <?php if($year == "2000") echo "selected";?>>2000</option>
                    <option value="2001" <?php if($year == "2001") echo "selected";?>>2001</option>
                    <option value="2002" <?php if($year == "2002") echo "selected";?>>2002</option>
                    <option value="2003" <?php if($year == "2003") echo "selected";?>>2003</option>
                    <option value="2004" <?php if($year == "2004") echo "selected";?>>2004</option>
                    <option value="2005" <?php if($year == "2005") echo "selected";?>>2005</option>
                    <option value="2006" <?php if($year == "2006") echo "selected";?>>2006</option>
                    <option value="2007" <?php if($year == "2007") echo "selected";?>>2007</option>
                    <option value="2008" <?php if($year == "2008") echo "selected";?>>2008</option>
                    <option value="2009" <?php if($year == "2009") echo "selected";?>>2009</option>
                    <option value="2010" <?php if($year == "2010") echo "selected";?>>2010</option>
                    <option value="2011" <?php if($year == "2011") echo "selected";?>>2011</option>
                    <option value="2012" <?php if($year == "2012") echo "selected";?>>2012</option>
                    <option value="2013" <?php if($year == "2013") echo "selected";?>>2013</option>
                    <option value="2014" <?php if($year == "2014") echo "selected";?>>2014</option>
                    <option value="2015" <?php if($year == "2015") echo "selected";?>>2015</option>
                    <option value="2016" <?php if($year == "2016") echo "selected";?>>2016</option>
                </select>
            </div>
            <div class="form-group">
                <label for="firstName">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="{{$contact->address}}">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" value="{{$contact->city}}">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" id="state" value="{{$contact->state}}">
            </div>
            <div class="form-group">
                <label for="zip">Zip</label>
                <input type="number" class="form-control" name="zip" id="zip" value="{{$contact->zip}}">
            </div>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <button type="submit" class="btn btn-primary" value="submit">Save</button>
        </form>
@stop