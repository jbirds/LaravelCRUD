@extends('layouts.master')

@section('content')

    @if (session('status'))
        <div class="text-center message">
            {{ session('status') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    app@endif

    <div class="container">
        <a href="/haven" class="btn btn-primary addContact">Home</a> &nbsp;
        <button type="button" class="btn btn-primary addContact" data-toggle="modal" data-target="#myModal">
            Add Contact
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="contact-table">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->firstName }}</td>
                    <td>{{ $contact->lastName }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->birthday }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->city }}</td>
                    <td>{{ $contact->state }}</td>
                    <td>{{ $contact->zip }}</td>
                    <td>
                        <a href="/haven/changeContact/{{$contact->id}}"><input type="button" class="fa" value="&#xf044;"></a>
                        <form action="/haven/delete" method="POST"}}>
                            <input type="hidden" name="rowId" value="{{$contact->id}}">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="submit" class="fa" value="&#xf1f8"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $contacts->render() !!}
    </div>



    <div class="modal fade" id="myModal" tabindex="-1" data-toggle="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add Contact</h4>
                </div>
                <div class="modal-body">
                    <form action="/haven/add" method="POST">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName"
                                   placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName"
                                   placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="E-mail address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone </label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <select class="form-control" name="month">
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <select class="form-control" name="date">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>

                            <select class="form-control" name="year">
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="firstName">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="city">
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" name="state" id="state" placeholder="State">
                        </div>
                        <div class="form-group">
                            <label for="zip">Zip</label>
                            <input type="number" class="form-control" name="zip" id="zip" placeholder="Zip code">
                        </div>
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <button type="submit" class="btn btn-primary" value="submit">Save</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop