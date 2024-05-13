<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body style="height: 1200px">
    <div class="static bg-slate-400">
        <p>Static parent</p>
        <div class="relative top-2">
          <p>Absolute child</p>
        </div>
      </div>


      <div class="sticky top-1">

          <div class="relative   mt-3 bg-slate-600 text-white ">
              <p>Relative parent</p>
              <div class="absolute right-0 top-0">
                  <p>Absolute child</p>
                </div>

            </div>
        </div>

  <div class="relative">
            <div class="">Contacts</div>

        </div>
        <div class="relative h-32 w-32 mt-[40px] bg-lime-300">
            <div class="absolute left-0 top-0 h-12 w-12 bg-red-300  ">01</div>
        </div>

        <div class="relative h-32 w-32 mt-[40px] bg-lime-300">
            <div class="absolute  inset-x-0 top-0 h-12   bg-red-300  ">01</div>
        </div>
        <div class="relative h-32 w-32 mx-4 mt-[40px] bg-lime-300">
            <div class="absolute -left-4 -top-4 h-12 w-12 bg-red-300  ">01</div>
        </div>
        <div dir="ltr">
            <div class="relative h-32 w-32 bg-yellow-200">
              <div class="absolute h-14 w-14 top-0   bg-fuchsia-400">kiran</div>
            </div>
          <div>
{{--
          <div dir="rtl">
            <div class="relative h-32 w-32  bg-yellow-200">
              <div class="absolute h-14 w-14 top-0 start-0 bg-fuchsia-400">kiran shiyal </div>
            </div>
          <div> --}}

            <div class="grid grid-cols-3 mt-4 gap-4">
                <div class=" bg-amber-500 text-center">01</div>
                <div class="invisible">02</div>
                <div class="bg-amber-500 text-center" >03</div>
                </div>

                <table>
                    <thead>
                      <tr>
                        <th>Invoice #</th>
                        <th>Client</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#100</td>
                        <td>Pendant Publishing</td>
                        <td>$2,000.00</td>
                      </tr>
                      <tr class="collapse">
                        <td>#101</td>
                        <td>Kruger Industrial Smoothing</td>
                        <td>$545.00</td>
                      </tr>
                      <tr>
                        <td>#102</td>
                        <td>J. Peterman</td>
                        <td>$10,000.25</td>
                      </tr>
                    </tbody>
                  </table>


 
</body>
</html>
