<template>
	<main class="main-body">
		<div class="covid-19">
			<div
				class="uk-card uk-card-default uk-card-body"
				style="
                    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.77)), url(/img/covid19.jpg) no-repeat center center;
                    color: rgb(255, 255, 255);
                    background-size: cover;
                    height: 100vh;
                    border-top: 4px solid #7cb342;
                    border-bottom: 4px solid #7cb342;
                    "
			>
				<div class="uk-position-center uk-padding-large" style="margin-top: -40px;">
					<div
						style="
                    background: rgba(0, 0, 0, 0.52);
                    padding: 40px;
                    border: 1px solid rgba(0, 0, 0, 0.56);
                    border-radius: 8px;
                    "
					>
						<h3
							class="uk-card-title"
							style="text-align: center; font-size: 40px;"
						>Coronavirus (COVID-19) Update</h3>
						<p>
							The recent pandemic of COVID-19 has created many challenges for small business owners. Some of which have been suggesting that businesses paused physical operations to minimize the risk of further spreading the virus.
							<br />
							<br />We want our customers to know that at LOTUS Marketing Solutions, we are doing everything in our power to enforce the "Stay Home/Save Lives" movement and we are #QUARANTEAM. We have always been a remote online based company and this has not created any last-minute arrangements for us. We will continue to service our clients as usual and in a timely manner.
							<br />
							<br />Furthermore, if your organization has been affected by the efforts to stop the spread of COVID-19, we want you to know that we are here to help with everything we can. We can explore opportunities to allow you to run your business from home, generate sales, collect customer's information or files, or absorb some portion of your normal business so that you can remain at least partially profitable.
							<br />
							<br />Please feel free to reach out to us to discuss further. If your finances have been affected, we can extend a grace period to allow any new work on your site to be paid in smaller placements at a discounted rate or postpone the due date of any new work on your sites for when you are more financially stable.
						</p>
					</div>
				</div>
			</div>
		</div>
		<main-slider />
		<certifications />
		<main-content />
		<services />
		<responsive-web-design />
		<website-types />
		<testimonials />
		<latest-work />
	</main>
</template>

<script>
import MainSlider from "./MainSlider";
import Certifications from "./Certifications";
import MainContent from "./MainContent";
import Services from "./Services";
import ResponsiveWebDesign from "./ResponsiveWebDesign";
import WebsiteTypes from "./WebsiteTypes";
import Testimonials from "./Testimonials";
import LatestWork from "./LatestWork";
export default {
	components: {
		MainSlider,
		Certifications,
		MainContent,
		Services,
		ResponsiveWebDesign,
		WebsiteTypes,
		Testimonials,
		LatestWork
	}
};
</script>

<style></style>
