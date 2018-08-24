@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Danh sách mail</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <p class="text-muted font-13 m-b-30"></p>
                <table id="dataTables-stores" class="table table-striped table-bordered table-actions-bar">
                    <thead>
                    <tr>
                        <th width="4%">ID</th>
                        <th width="7%">First name</th>
                        <th width="7%">Last name</th>
                        <th width="15%">Email</th>
                        <th width="10%">Address1</th>
                        <th width="10%">Address2</th>
                        <th width="6%">City</th>
                        <th width="6%">Province</th>
                        <th width="8%">Province Code</th>
                        <th width="7%">Country</th>
                        <th width="8%">Country Code</th>
                        <th width="6%">Zipcode</th>
                        <th width="5%"></th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mail-title">Cập nhật thông tin mail</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>Link cập nhật: <a href="#" target="_blank" id="mail-link">Bấm vào đây</a></h4>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea class="form-control" id="mail-info" rows="5"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <h4>Thông tin customer sau khi cập nhật</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-horizontal" role="form" id="gmail-form">
                                <input type="hidden" class="form-control" name="email" value="">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">First name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="first_name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Last name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="last_name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Address1</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="address1" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Address2</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="address2" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">City</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="city" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Province code</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="province_code" value="">
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="province" value="">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Zipcode</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="zipcode" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Country</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="country" value="">
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="country_code" value="">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light" id="submit-button">Lưu thay đổi</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
@section('scripts')
    <script src="/vendor/ubold/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/dataTables.bootstrap.js"></script>

    <script src="/vendor/ubold/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/jszip.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/dataTables.scroller.min.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/dataTables.colVis.js"></script>
    <script src="/vendor/ubold/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

    <script src="/vendor/ubold/assets/pages/datatables.init.js"></script>
    <script src="/js/handlebars.js"></script>
    <script src="/vendor/ubold/assets/plugins/select2/js/select2.full.min.js"></script>

    <script src="/vendor/ubold/assets/plugins/moment/moment.js"></script>
    <script src="/vendor/ubold/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
@endsection

@section('inline_scripts')
    <script type="text/javascript">
        var datatable;
        var states = {
            "AL": "Alabama",
            "AK": "Alaska",
            "AS": "American Samoa",
            "AZ": "Arizona",
            "AR": "Arkansas",
            "CA": "California",
            "CO": "Colorado",
            "CT": "Connecticut",
            "DE": "Delaware",
            "DC": "District Of Columbia",
            "FM": "Federated States Of Micronesia",
            "FL": "Florida",
            "GA": "Georgia",
            "GU": "Guam",
            "HI": "Hawaii",
            "ID": "Idaho",
            "IL": "Illinois",
            "IN": "Indiana",
            "IA": "Iowa",
            "KS": "Kansas",
            "KY": "Kentucky",
            "LA": "Louisiana",
            "ME": "Maine",
            "MH": "Marshall Islands",
            "MD": "Maryland",
            "MA": "Massachusetts",
            "MI": "Michigan",
            "MN": "Minnesota",
            "MS": "Mississippi",
            "MO": "Missouri",
            "MT": "Montana",
            "NE": "Nebraska",
            "NV": "Nevada",
            "NH": "New Hampshire",
            "NJ": "New Jersey",
            "NM": "New Mexico",
            "NY": "New York",
            "NC": "North Carolina",
            "ND": "North Dakota",
            "MP": "Northern Mariana Islands",
            "OH": "Ohio",
            "OK": "Oklahoma",
            "OR": "Oregon",
            "PW": "Palau",
            "PA": "Pennsylvania",
            "PR": "Puerto Rico",
            "RI": "Rhode Island",
            "SC": "South Carolina",
            "SD": "South Dakota",
            "TN": "Tennessee",
            "TX": "Texas",
            "UT": "Utah",
            "VT": "Vermont",
            "VI": "Virgin Islands",
            "VA": "Virginia",
            "WA": "Washington",
            "WV": "West Virginia",
            "WI": "Wisconsin",
            "WY": "Wyoming"
        };

        var countries = {
            "Bangladesh": "BD",
            "Belgium": "BE",
            "Burkina Faso": "BF",
            "Bulgaria": "BG",
            "Bosnia and Herzegovina": "BA",
            "Barbados": "BB",
            "Wallis and Futuna": "WF",
            "Saint Barthelemy": "BL",
            "Bermuda": "BM",
            "Brunei": "BN",
            "Bolivia": "BO",
            "Bahrain": "BH",
            "Burundi": "BI",
            "Benin": "BJ",
            "Bhutan": "BT",
            "Jamaica": "JM",
            "Bouvet Island": "BV",
            "Botswana": "BW",
            "Samoa": "WS",
            "Brazil": "BR",
            "Bahamas": "BS",
            "Jersey": "JE",
            "Belarus": "BY",
            "Belize": "BZ",
            "Russia": "RU",
            "Rwanda": "RW",
            "Serbia": "RS",
            "East Timor": "TL",
            "Reunion": "RE",
            "Turkmenistan": "TM",
            "Tajikistan": "TJ",
            "Romania": "RO",
            "Tokelau": "TK",
            "Guinea-Bissau": "GW",
            "Guam": "GU",
            "Guatemala": "GT",
            "South Georgia and the South Sandwich Islands": "GS",
            "Greece": "GR",
            "Equatorial Guinea": "GQ",
            "Guadeloupe": "GP",
            "Japan": "JP",
            "Guyana": "GY",
            "Guernsey": "GG",
            "French Guiana": "GF",
            "Georgia": "GE",
            "Grenada": "GD",
            "United Kingdom": "GB",
            "Gabon": "GA",
            "El Salvador": "SV",
            "Guinea": "GN",
            "Gambia": "GM",
            "Greenland": "GL",
            "Gibraltar": "GI",
            "Ghana": "GH",
            "Oman": "OM",
            "Tunisia": "TN",
            "Jordan": "JO",
            "Croatia": "HR",
            "Haiti": "HT",
            "Hungary": "HU",
            "Hong Kong": "HK",
            "Honduras": "HN",
            "Heard Island and McDonald Islands": "HM",
            "Venezuela": "VE",
            "Puerto Rico": "PR",
            "Palestinian Territory": "PS",
            "Palau": "PW",
            "Portugal": "PT",
            "Svalbard and Jan Mayen": "SJ",
            "Paraguay": "PY",
            "Iraq": "IQ",
            "Panama": "PA",
            "French Polynesia": "PF",
            "Papua New Guinea": "PG",
            "Peru": "PE",
            "Pakistan": "PK",
            "Philippines": "PH",
            "Pitcairn": "PN",
            "Poland": "PL",
            "Saint Pierre and Miquelon": "PM",
            "Zambia": "ZM",
            "Western Sahara": "EH",
            "Estonia": "EE",
            "Egypt": "EG",
            "South Africa": "ZA",
            "Ecuador": "EC",
            "Italy": "IT",
            "Vietnam": "VN",
            "Solomon Islands": "SB",
            "Ethiopia": "ET",
            "Somalia": "SO",
            "Zimbabwe": "ZW",
            "Saudi Arabia": "SA",
            "Spain": "ES",
            "Eritrea": "ER",
            "Montenegro": "ME",
            "Moldova": "MD",
            "Madagascar": "MG",
            "Saint Martin": "MF",
            "Morocco": "MA",
            "Monaco": "MC",
            "Uzbekistan": "UZ",
            "Myanmar": "MM",
            "Mali": "ML",
            "Macao": "MO",
            "Mongolia": "MN",
            "Marshall Islands": "MH",
            "Macedonia": "MK",
            "Mauritius": "MU",
            "Malta": "MT",
            "Malawi": "MW",
            "Maldives": "MV",
            "Martinique": "MQ",
            "Northern Mariana Islands": "MP",
            "Montserrat": "MS",
            "Mauritania": "MR",
            "Isle of Man": "IM",
            "Uganda": "UG",
            "Tanzania": "TZ",
            "Malaysia": "MY",
            "Mexico": "MX",
            "Israel": "IL",
            "France": "FR",
            "British Indian Ocean Territory": "IO",
            "Saint Helena": "SH",
            "Finland": "FI",
            "Fiji": "FJ",
            "Falkland Islands": "FK",
            "Micronesia": "FM",
            "Faroe Islands": "FO",
            "Nicaragua": "NI",
            "Netherlands": "NL",
            "Norway": "NO",
            "Namibia": "NA",
            "Vanuatu": "VU",
            "New Caledonia": "NC",
            "Niger": "NE",
            "Norfolk Island": "NF",
            "Nigeria": "NG",
            "New Zealand": "NZ",
            "Nepal": "NP",
            "Nauru": "NR",
            "Niue": "NU",
            "Cook Islands": "CK",
            "Kosovo": "XK",
            "Ivory Coast": "CI",
            "Switzerland": "CH",
            "Colombia": "CO",
            "China": "CN",
            "Cameroon": "CM",
            "Chile": "CL",
            "Cocos Islands": "CC",
            "Canada": "CA",
            "Republic of the Congo": "CG",
            "Central African Republic": "CF",
            "Democratic Republic of the Congo": "CD",
            "Czech Republic": "CZ",
            "Cyprus": "CY",
            "Christmas Island": "CX",
            "Costa Rica": "CR",
            "Curacao": "CW",
            "Cape Verde": "CV",
            "Cuba": "CU",
            "Swaziland": "SZ",
            "Syria": "SY",
            "Sint Maarten": "SX",
            "Kyrgyzstan": "KG",
            "Kenya": "KE",
            "South Sudan": "SS",
            "Suriname": "SR",
            "Kiribati": "KI",
            "Cambodia": "KH",
            "Saint Kitts and Nevis": "KN",
            "Comoros": "KM",
            "Sao Tome and Principe": "ST",
            "Slovakia": "SK",
            "South Korea": "KR",
            "Slovenia": "SI",
            "North Korea": "KP",
            "Kuwait": "KW",
            "Senegal": "SN",
            "San Marino": "SM",
            "Sierra Leone": "SL",
            "Seychelles": "SC",
            "Kazakhstan": "KZ",
            "Cayman Islands": "KY",
            "Singapore": "SG",
            "Sweden": "SE",
            "Sudan": "SD",
            "Dominican Republic": "DO",
            "Dominica": "DM",
            "Djibouti": "DJ",
            "Denmark": "DK",
            "British Virgin Islands": "VG",
            "Germany": "DE",
            "Yemen": "YE",
            "Algeria": "DZ",
            "United States": "US",
            "Uruguay": "UY",
            "Mayotte": "YT",
            "United States Minor Outlying Islands": "UM",
            "Lebanon": "LB",
            "Saint Lucia": "LC",
            "Laos": "LA",
            "Tuvalu": "TV",
            "Taiwan": "TW",
            "Trinidad and Tobago": "TT",
            "Turkey": "TR",
            "Sri Lanka": "LK",
            "Liechtenstein": "LI",
            "Latvia": "LV",
            "Tonga": "TO",
            "Lithuania": "LT",
            "Luxembourg": "LU",
            "Liberia": "LR",
            "Lesotho": "LS",
            "Thailand": "TH",
            "French Southern Territories": "TF",
            "Togo": "TG",
            "Chad": "TD",
            "Turks and Caicos Islands": "TC",
            "Libya": "LY",
            "Vatican": "VA",
            "Saint Vincent and the Grenadines": "VC",
            "United Arab Emirates": "AE",
            "Andorra": "AD",
            "Antigua and Barbuda": "AG",
            "Afghanistan": "AF",
            "Anguilla": "AI",
            "U.S. Virgin Islands": "VI",
            "Iceland": "IS",
            "Iran": "IR",
            "Armenia": "AM",
            "Albania": "AL",
            "Angola": "AO",
            "Antarctica": "AQ",
            "American Samoa": "AS",
            "Argentina": "AR",
            "Australia": "AU",
            "Austria": "AT",
            "Aruba": "AW",
            "India": "IN",
            "Aland Islands": "AX",
            "Azerbaijan": "AZ",
            "Ireland": "IE",
            "Indonesia": "ID",
            "Ukraine": "UA",
            "Qatar": "QA",
            "Mozambique": "MZ"
        }

        $(function () {
            datatable = $("#dataTables-stores").DataTable({
                searching: false,
                serverSide: true,
                processing: true,
                ajax: {
                    url: '{!! route('gmails.datatables') !!}'
                },
                lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'csv',
                        text: 'Export to csv',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
                        }
                    }
                ],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'email', name: 'email'},
                    {data: 'address1', name: 'address1'},
                    {data: 'address2', name: 'address2'},
                    {data: 'city', name: 'city'},
                    {data: 'province', name: 'province'},
                    {data: 'province_code', name: 'province_code'},
                    {data: 'country', name: 'country'},
                    {data: 'country_code', name: 'country_code'},
                    {data: 'zipcode', name: 'zipcode'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            return data
                        }
                    }
                ],
                order: [[0, 'desc']]
            });
        });

        var id;

        $(document).on("click", ".edit-mail", function () {
            id = $(this).data('id');
            var mail = $(this).data('mail');
            var first_name = $(this).data('first-name');
            var last_name = $(this).data('last-name');
            var address1 = $(this).data('address1');
            var address2 = $(this).data('address2');
            var city = $(this).data('city');
            var province_code = $(this).data('province_code');
            var country = $(this).data('country');
            var zipcode = $(this).data('zipcode');
            var link = $(this).data('link');
            $('#mail-title').text('Cập nhật thông tin mail ' + mail);
            $('#mail-link').attr('href', link);
            $('input[name="email"]').val(mail);
            $('input[name="first_name"]').val(first_name);
            $('input[name="last_name"]').val(last_name);
            $('input[name="address1"]').val(address1);
            $('input[name="address2"]').val(address2);
            $('input[name="city"]').val(city);
            $('input[name="province_code"]').val(province_code);
            $('input[name="country"]').val(country);
            $('input[name="zipcode"]').val(zipcode);
            $('#mail-info').val('');

        });

        $('#mail-info').bind('input propertychange', function(e) {
            var values = e.target.value.split('\n');
            var names = values[0].split(' ');
            var addr;

            if(values.length == 5 && values[4] != '') {
                $('input[name="address2"]').val(values[2]);
                addr = values[3];
                country = values[4];
            } else {
                $('input[name="address2"]').val('');
                addr = values[2];
                country = values[3];
            }
            $('input[name="first_name"]').val(names[1]);
            $('input[name="last_name"]').val(names[0]);
            $('input[name="address1"]').val(values[1]);
            var parts = addr.split(',');
            $('input[name="city"]').val(parts[0]);
            var i_parts = parts[1].trim().split(' ');
            $('input[name="province_code"]').val(i_parts[0]);
            console.log(states[i_parts[0]]);
            $('input[name="province"]').val(states[i_parts[0]]);
            $('input[name="zipcode"]').val(i_parts[1]);
            $('input[name="country"]').val(country);
            $('input[name="country_code"]').val(countries[country]);
        });

        $('#submit-button').on('click', function(e) {
            var form = $('#gmail-form');
            console.log(form.serialize())
            $.ajax({
                type: "POST",
                url: '/' + id + '/update',
                data: form.serialize(),
                success: function(data) {
                    datatable.row(id).draw()
                    $('#myModal').modal('hide');
                },
                error: function(e) {
                    swal({
                        title: "Oops",
                        text: "Có lỗi xảy ra!",
                        confimButtonText: "Okay"
                    });
                }
            })
        });
    </script>
@endsection
