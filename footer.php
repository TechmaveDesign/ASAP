</div>
	<!-- /Wrapper -->

	<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
	<!-- jQuery -->
	<script src="vendors/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- FeatherIcons JS -->
	<script src="dist/js/feather.min.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Simplebar JS -->
	<script src="vendors/simplebar/dist/simplebar.min.js"></script>

	<!-- Data Table JS -->
	<script src="vendors/datatables.net/js/dataTables.min.js"></script>
	<script src="vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="vendors/datatables.net-select/js/dataTables.select.min.js"></script>

	<link rel="stylesheet" type="text/css" href="dist/customplugins/buttons.dataTables.min.css">
<script type="text/javascript" src="dist/customplugins/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="dist/customplugins/jszip.min.js"></script>
<script type="text/javascript" src="hdist/customplugins/pdfmake.min.js"></script>
<script type="text/javascript" src="dist/customplugins/vfs_fonts.js"></script>
<script type="text/javascript" src="dist/customplugins/buttons.html5.min.js"></script>
<script type="text/javascript" src="dist/customplugins/buttons.colVis.min.js"></script>


<!-- Select2 JS -->
<script src="vendors/select2/dist/js/select2.full.min.js"></script>
<script src="dist/js/select2-data.js"></script>

	<!-- Daterangepicker JS -->
	<script src="vendors/moment/min/moment.min.js"></script>
	<script src="vendors/daterangepicker/daterangepicker.js"></script>
	<script src="dist/js/daterangepicker-data.js"></script>

	<!-- Amcharts Maps JS -->
	<script src="cdn.amcharts.com/lib/5/index.js"></script>
	<script src="cdn.amcharts.com/lib/5/map.js"></script>
	<script src="cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
	<script src="cdn.amcharts.com/lib/5/themes/Animated.js"></script>

	<!-- Apex JS -->
	<script src="vendors/apexcharts/dist/apexcharts.min.js"></script>

	<!-- Init JS -->
	<script src="dist/js/init.js"></script>
	<script src="dist/js/chips-init.js"></script>
	<script src="dist/js/dashboard-data.js"></script>
	<script src="dist/js/contact-data.js"></script>
	

    <!-- dynamic page header title and breadcrums js -->
    <script src="dist/js/page-header-init.js"></script>



	<!-- daily application chart js -->
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const chart = new ApexCharts(document.querySelector("#cashflow-chart"), getChartOptions('month'));
			chart.render();

			document.querySelectorAll('[data-daily-range]').forEach(btn => {
				btn.addEventListener('click', () => {
					document.querySelectorAll('[data-daily-range]').forEach(b => b.classList.remove(
						'active'));
					btn.classList.add('active');
					const value = btn.getAttribute('data-daily-range');
					chart.updateOptions(getChartOptions(value)); // Your daily application chart logic
				});
			});


			function getChartOptions(range) {
				let categories = [],
					newApplications = [],
					approvedApplications = [];

				if (range === 'week') {
					categories = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
					newApplications = [25, 30, 28, 35, 40, 22, 18];
					approvedApplications = [15, 20, 18, 25, 30, 17, 12];
				} else if (range === 'year') {
					categories = ['2020', '2021', '2022', '2023', '2024'];
					newApplications = [320, 480, 510, 580, 640];
					approvedApplications = [200, 350, 420, 470, 520];
				} else {
					categories = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
					newApplications = [60, 75, 70, 80, 95, 100, 110, 115, 120, 105, 98, 130];
					approvedApplications = [40, 50, 55, 65, 70, 80, 85, 90, 95, 90, 85, 100];
				}

				return {
					series: [{
							name: 'New Applications',
							data: newApplications
						},
						{
							name: 'Approved Applications',
							data: approvedApplications
						}
					],
					chart: {
						type: 'bar',
						height: 250,
						toolbar: {
							show: false
						}
					},
					colors: ['#203b9c', '#D3FDA3'],
					plotOptions: {
						bar: {
							horizontal: false,
							columnWidth: '50%',
							borderRadius: 6
						}
					},
					dataLabels: {
						enabled: false
					},
					xaxis: {
						categories,
						labels: {
							style: {
								colors: '#666'
							}
						}
					},
					yaxis: {
						labels: {
							style: {
								colors: '#666'
							}
						}
					},
					legend: {
						labels: {
							colors: '#444'
						}
					}
				};
			}
		});
	</script>
	<!-- daily application chart end -->


	<!-- loan graph chart -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const chartEl = document.querySelector("#creditChart");
			const buttons = document.querySelectorAll('#rangeToggle button');
			const legends = document.querySelectorAll('#legendToggle .legend-item');

			const labels = ['Active Loans', 'Pending Applications', 'Approved', 'Overdue'];
			const colors = ['#61aeff', '#fcbd5e', '#7ed957', '#ff7373'];
			const chartData = {
				week: [50, 20, 15, 15],
				month: [120, 40, 25, 25],
				year: [1500, 450, 400, 150]
			};

			let currentRange = 'week';

			const chartOptions = {
				chart: {
					type: 'donut',
					height: 280
				},
				labels: labels,
				colors: colors,
				dataLabels: {
					enabled: false
				},
				legend: {
					show: false
				},
				stroke: {
					width: 0
				},
				series: chartData[currentRange]
			};

			const chart = new ApexCharts(chartEl, chartOptions);
			chart.render();

			document.querySelectorAll('[data-loan-range]').forEach(btn => {
				btn.addEventListener('click', () => {
					document.querySelectorAll('[data-loan-range]').forEach(b => b.classList.remove(
						'active'));
					btn.classList.add('active');
					const value = btn.getAttribute('data-loan-range');
					chart.updateSeries(chartData[value]); // Your donut chart logic
				});
			});


			legends.forEach((legend, index) => {
				legend.addEventListener('click', () => {
					const newSeries = Array(chartData[currentRange].length).fill(0);
					newSeries[index] = chartData[currentRange][index];
					chart.updateSeries(newSeries);
				});
			});
		});
	</script>



	

</body>

</html>