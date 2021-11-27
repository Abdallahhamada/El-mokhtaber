<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <link href={{URL::asset('css/style.css')}} rel='stylesheet' ></link>
</head>
<body>
    <div class="body-container">
        <header>
            <div>
                <h4>اسم الفرع    نجع حمادي</h4>
                <h4>مدير الفرع    د.غادة حشمت</h4>
                <h4>مدير الوحده    د.مني محسن</h4>
            </div>
            <div>
                <img width="300px" height="110px" src={{URL::asset('img/logo.png')}} alt="">
            </div>
            <div class="info">
                <h2>رئيس مجلس الادارة</h2>
                <h2>ا.د.مؤمنه كامل</h2>
                <h2>مدير المعامل</h2>
                <h2>ا.د.هند الشربيني</h2>
            </div>
        </header>
        <div class="container">
            <div class="left">
                <div class="name">
                    <h4>PATIENT NAME</h4>
                    <h3>{{$data[0]->name}}</h3>
                </div>
                <div class="visit">
                    <h3>Visit Number</h3>
                    <p>{{$data[0]->visit_number}}</p>
                </div>
                <div class="age">
                    <h3>Age</h3>
                    <p>{{$data[0]->age}}</p>
                </div>
                <div class="gender">
                    <h3>Gender</h3>
                    <p>{{$data[0]->gender}}</p>
                </div>
            </div>
            <div class="right">
                <div class="date">
                    <div>
                        <h4>Registered:</h4>
                        <p>{{$data[0]->created_at}}</p>
                    </div>
                    <div>
                        <h4>collected:</h4>
                        <p>{{$data[0]->updated_at}}</p>
                    </div>
                    <div>
                        <h4>Authenticated:</h4>
                        <p>{{$data[0]->created_at}}</p>
                    </div>
                    <div>
                        <h4>printed:</h4>
                        <p>{{$data[0]->updated_at}}</p>
                    </div>
                </div>
                <div class="referred">
                    <h3>Referred By</h3>
                    <p>prof:-</p>
                </div>
                <div class="client-id">
                    <h3>Clint ID</h3>
                    <p>{{$data[0]->client_id}}</p>
                </div>
            </div>
        </div>
        <div class="result">
            <div class="top-title">
                MOLECULAR BIOLOGY REPORT
            </div>
            <div class="lab-title">
                <h4>Test Name</h4>
                <h4>Result</h4>
                <h4>Unit</h4>
                <h4>Reference Range</h4>
                <h4>Covid 19 by PCR</h4>
                <h4>{{$data[0]->result}}</h4>
                <h4> </h4>
                <h4>Negative</h4>
            </div>
            <h3>N.B. :Source: Nasopharyngeal Swab</h3>
        </div>
        <div class="main-body"></div>
        <div class="extra">
            <div class="qr-code">
                <img src={{URL::asset('img/qr.png')}} alt="">
            </div>
            <div class="signature">
                <img src={{URL::asset('img/sign.png')}} alt="">
            </div>
        </div>
        <div class="first-footer">
            <img src={{URL::asset('img/footer.png')}} alt="">
        </div>
        <div class="header2">
            <img src={{URL::asset('img/logo2.png')}} alt="">
        </div>
        <div class="container2">
            <div class="left">
                <div class="name">
                    <h4>PATIENT NAME</h4>
                    <h3>{{$data[0]->name}}</h3>
                </div>
                <div class="visit">
                    <h3>Visit Number</h3>
                    <p>{{$data[0]->visit_number}}</p>
                </div>
                <div class="age">
                    <h3>Age</h3>
                    <p>{{$data[0]->age}}</p>
                </div>
                <div class="gender">
                    <h3>Patient ID</h3>
                    <p>{{$data[0]->patient_id}}</p>
                </div>
            </div>
            <div class="right">
                <div class="date">
                    <div>
                        <h4>Visit Date:</h4>
                        <p>{{$data[0]->created_at}}</p>
                    </div>
                    <div>
                        <h4>Payment Date:</h4>
                        <p>{{$data[0]->created_at}}</p>
                    </div>
                    <div>
                        <h4>Branch</h4>                        
                    </div>
                    <div>
                        <h4>Result Date:</h4>
                        <p>{{$data[0]->updated_at}}</p>
                    </div>
                    <div>
                        <h4> Receipt No:</h4>
                        <p>28485</p>
                    </div>
                    <div>
                        <p>Naga Hamady</p>
                    </div>
                </div>
                <div class="referred">
                    <h3>Referred By</h3>
                    <p>-</p>
                </div>
                <div class="client-id">
                    <h3>Insurance No</h3>
                    <p>000</p>
                </div>
                <div class="client-id">
                    <h3>Customer</h3>
                    <p>تعاقدات شركات سياحية - محافظات</p>
                </div>
            </div>
        </div>
        <div class="table">
            <div>Item Type</div>
            <div>Item Name</div>
            <div>Value</div>
            <div>Test</div>
            <div>Immunity PCR</div>
            <div>900</div>
        </div> 
        <div class="price">
            <div class="left">
                <div class="top">
                    <div class="left-info">
                        <h3>Current Receipt Amount:</h3>
                        <h3>Payment User Name:</h3>
                        <h3>Payment Date Time:</h3>
                    </div>
                    <div class="right-info">
                        <h3>900</h3>
                        <p>Mohamed Ahmed Moghraby</p>
                        <p>{{$data[0]->updated_at}}</p>
                    </div>
                </div>
                <div class="bottom">
                    <h1>إجمالي الدفوع 900 جنيه</h1>
                </div>
            </div>
            <div class="right">
                <div>
                    <h3>Total Amount:</h3>
                    <p>900</p>
                </div>
                <div>
                    <h3>Discount:</h3>
                    <p>0</p>
                </div>
                <div>
                    <h3>Final Amount:</h3>
                    <p>900</p>
                </div>
                <div>
                    <h3>Total Received:</h3>
                    <p>900</p>
                </div>
                <div>
                    <h3>Balance Amount:</h3>
                    <p>0</p>
                </div>
            </div>
        </div>
        <div class="main-body"></div>
        <div class="footer2">
            <img src={{URL::asset('img/footer2.png')}} alt="">
        </div>       
    </div>
</body>
</html>