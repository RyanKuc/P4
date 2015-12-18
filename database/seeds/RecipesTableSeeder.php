<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Italian Ciabatta Burgers',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/56411f694dab7112428b4567.jpg?t=20151214090528',
          'description' => 'With Carmelized Onion, and Mozzarella',
          'ingredients' => 'Red Onion, Ground Beef, Mozzarella Cheese (Milk), Parmesan Cheese (Milk), Ciabatta (Wheat, Milk, Soy)',
          'instructions' => 'Caramelize the onions: Halve, peel, and thinly slice the onion. Heat a drizzle of oil in a large pan over medium heat. Add the onion and1 teaspoon sugar to the pan and cook, tossing, for 6-8 minutes, until
          caramelized. Season with salt and pepper, then set aside.
          Cook the burgers: Form the ground beef into 2 patties. In the same
          pan you cooked the onions in, heat another drizzle of oil over mediumhigh
          heat. Season the patties on all sides with salt and pepper, then
          place in the pan and cook for 2-4 minutes per side. Top the patties with the mozzarella and Parmesan
          cheese, then cover and cook another 1 minute, until the cheese melts.
          Toast the bread: While the patties cook, halve the ciabatta rolls and
          place in the oven or toaster to toast for 3-5 minutes.',
          'user_id' => '1',

        ]);
        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Asian Noodle Salad',
          'picture_link' => 'http://beingfrugalbychoice.com/wp-content/uploads/2013/05/013.jpg',
          'description' => 'With Green onion and toasted sesame seeds',
          'ingredients' => 'Green onion, thin speghetti 1 lb, soy sauce, sesame oil, hot chili oil, sesame seeds',
          'instructions' => 'Boil water in a medium-large pot. Add 1 lb thin speghetti and cook 8-10 minutes until al dente. In a bowl, combine soy sauce, sesame oil, hot chili oil and wisk thoroughly. Toast sesame seeds over med-low heat for 3-5 minutes or until brown. Chop green onion. Combine sauce and cooked speghetti and allow to cool to room temperature before garnishing with green onion and sesame seeds',
          'user_id' => '1',

        ]);
        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Caesar Salad',
          'picture_link' => 'http://didyouknow.link/wp-content/uploads/2015/08/caesar-salad-lower.jpg',
          'description' => 'with homemade dressing',
          'ingredients' => 'romaine lettuce, mayonnaise, olive oil, salt, pepper, garlic, anchovie paste, lemon, cayenne',
          'instructions' => 'Chop lettuce. In a small bowl, combine 3/4 cup mayonnaise, 1/4 cup olive oil, lemon juice, minced garlic, salt pepper and cayenne to taste, as well as a toothpaste sized squeeze of anchoive paste. Mix thoroughly and add dressing to romaine.',
          'user_id' => '1',

        ]);

        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Glazed Teriyaki Chicken',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/564b7b86fd2cb93c7c8b4567.jpg?t=20151218100922',
          'description' => 'with Baby Bok Choy and Coconut Brown Rice',
          'ingredients' => 'Brown Rice, Lite Coconut Milk, Chicken Breast, Baby Bok Choy, Ginger, Garlic, Honey, Cashews (tree nuts), Sesame Seeds',
          'instructions' => 'Cook the coconut rice: In a small pot, bring 1 cup coconut milk (we sent more), ½ cup water, and a pinch of salt to a boil. Add the brown rice, cover, and reduce to a low simmer for 25-30 minutes, until tender. Set aside, covered, until the rest of the meal is ready. Prep the ingredients: Trim and discard the root end from the bok choy, then thinly slice the white parts, leaving the green leaves whole. Mince or grate the garlic. Peel and mince or grate 2 teaspoons ginger. Cut the chicken into thin strips. Make the teriyaki sauce: In a small bowl, combine the soy sauce, ginger, garlic, 1 Tablespoon honey, and 1 Tablespoon water. Cook the chicken: Heat 2 teaspoons oil in a large pan over medium-high heat. Season the chicken on all sides with salt and pepper. Add the chicken to the pan and cook for 1-2 minutes per side, until golden brown. Set aside. Cook the bok choy: Heat another drizzle of oil in the same pan over medium heat. Add the bok choy to the pan and cook, tossing, for 3-4 minutes, until tender. Season with salt and pepper. Glaze the chicken: Return the chicken to the pan along with the teriyaki sauce. Increase the heat to medium-high and toss until the sauce is thickened, for 1-2 minutes. Serve the teriyaki chicken on a bed of coconut brown rice and sprinkle with the cashews and sesame seeds. Drizzle any remaining sauce over the plate and enjoy!',
          'user_id' => '3',

        ]);

        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Lemony Salmon Cacio e Pepe Linguine',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/564121da79a23c07038b4567.jpg?t=20151218101037',
          'description' => 'with Crispy Broccoli, Burst Tomatoes, and Chilies',
          'ingredients' => 'Lemon, Garlic, Broccoli Florets, Linguine (Wheat), Grape Tomatoes, Salmon Fillets (Fish), Parmesan Cheese (Milk), Chili Flakes',
          'instructions' => 'Prep the ingredients: Preheat the oven to 400 degrees. Bring a large pot of water with a large pinch of salt to a boil. Zest and halve the lemon. Slice one half into rounds for garnish, if desired. Mince or grate the garlic. Add the broccoli to the boiling water and cook for 4-5 minutes, until tender. Remove with a slotted spoon and set aside. TIP: To preserve its bright green color, place the broccoli in a bowl of ice water after cooking. Cook the pasta: Add the linguine to the boiling water you cooked the broccoli in and cook for 8-10 minutes, until al dente. Drain, reserving ¼ cup pasta water. Roast the tomatoes: Toss the tomatoes on a baking sheet with a drizzle of oil and a pinch of salt and pepper. Place in the oven for 10-12 minutes, until they burst. Cook the salmon: While the tomatoes roast, heat a drizzle of oil in a large pan over medium-high heat. Pat the salmon dry with paper towels and season on all sides with salt and pepper. Add the salmon to the pan and cook for 3-4 minutes per side, until just opaque in the middle. Set aside. In the same pan, heat 2 Tablespoons butter, the garlic, and chili flakes (to taste, we used 1/4 teaspoon) over medium heat. Cook for 30 seconds, until fragrant. Toss the drained pasta, lemon zest, Parmesan, broccoli, burst tomatoes, and ¼ cup pasta water into the pan and toss to combine. Cook, tossing, for 1-2 minutes, until the sauce thickens. Season generously with salt and freshly cracked black pepper.  Serve the linguine with the salmon on top and finish with a squeeze of lemon. Garnish with a lemon round, if desired, and enjoy!',
          'user_id' => '3',

        ]);

        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Southwestern Chicken Sausage Chili',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/56412392f8b25e4f1a8b4567.jpg?t=20151218100444',
          'description' => 'with Black Beans, Sour Cream, and Oregano',
          'ingredients' => 'Red Onion, Garlic, Scallions, Black Beans, Green Bell Pepper, Southwestern Chicken Sausage, Chili Powder, Cumin, Dried Oregano, Diced Tomatoes, Gluten Free Vegetable Stock Concentrate, Sour Cream (Milk)',
          'instructions' => 'Prep the ingredients: Halve, peel, and dice the onion. Core, seed, and remove the white ribs from the bell pepper, then finely dice. Mince or grate the garlic. Thinly slice the scallions, keeping the greens and whites separate. Drain and rinse the black beans.  Cook the sausage: Heat a drizzle of oil in a large pan over mediumhigh heat. Add the chicken sausage to the pan and cook for 4-5 minutes, turning occasionally, until browned. Set aside, then slice into ½-inch rounds once cool enough to handle.  Cook the vegetables: Heat another drizzle of oil in the same pan over medium-high heat. Add the onions, peppers, and scallion whites to the pan and cook, tossing, for 4-5 minutes, until softened. Add the garlic, cumin, and chili powder to the pan and cook for 1-2 more minutes, until fragrant.  Add the diced tomatoes, black beans, vegetable stock concentrate, oregano, and 2 cups water to the pan. Bring to a boil, then reduce to a simmer for 10-15 minutes, stirring occasionally. Stir the chicken sausage into the pan. Taste and season with salt and pepper.  Serve the chili divided between bowls, dolloped with sour cream and garnished with scallion greens. Enjoy!',
          'user_id' => '3',

        ]);
        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Turkey & Sage Tetrazzini',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/565495de4dab717e4d8b4567.jpg?t=20151218102039',
          'description' => 'with Sweet Peas, Mushrooms, and Parmesan Cream Sauce',
          'ingredients' => 'Button Mushrooms, Thyme, Ground Turkey, Sage, Linguine (Wheat), Peas, Cream Cheese (Milk), Parmesan Cheese (Milk), Gluten Free Chicken Stock Concentrate',
          'instructions' => 'Prep the ingredients: Bring a large pot of water with a large pinch of salt to a boil. Thinly slice the mushrooms. Pick the thyme and sage off the stems and roughly chop the leaves.  Cook the turkey: Heat a drizzle of oil in a large pan over mediumhigh heat. Add the turkey and sage to the pan and cook, breaking up the meat into pieces, until browned and cooked through. Set aside.  Cook the pasta: Add the linguine to the boiling water and cook for 8-10 minutes, until al dente. Drain, reserving 1 cup of pasta water.  Cook the mushrooms: While the linguine cooks, heat a drizzle of oil in the same pan you cooked the turkey in over medium-high heat. Add the mushrooms to the pan and cook, tossing, for 4-6 minutes, until golden brown. Remove the pan from heat until the linguine is ready. 5Make the sauce: When the linguine is ready add the thyme, stock concentrate, peas, and reserved pasta water to the pan. Bring the mixture to a simmer over medium-high heat until the sauce has thickened and reduced by half. Reduce the heat to low, then stir in the cream cheese and half the Parmesan. Add the linguine and turkey to the pan and toss to combine. Season with salt and pepper.  Plate: Divide the linguine between dishes and sprinkle with the remaining Parmesan. Enjoy!',
          'user_id' => '3',

        ]);

        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Soy-Glazed Steak',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/5654aa5bfd2cb9d6278b4567.jpg?t=20151218102105',
          'description' => 'with Wasabi Mashed Potatoes and Sesame Spinach',
          'ingredients' => 'Russet Potatoes, Scallions, Ginger, Gluten free Soy Sauce (Soy), Gluten Free Beef Stock Concentrate, Sirloin Steak, Wasabi Paste, Sour Cream (Milk), Baby Spinach, Sesame Seeds',
          'instructions' => 'Boil the potatoes: Peel and dice the potatoes into ½-inch cubes. Place the potatoes in a medium pot with a generous pinch of salt and enough water to cover. Bring to a boil, then reduce to simmer and cook for 10-12 minutes, until fork-tender. Drain.  Prep the ingredients: Meanwhile, thinly slice the scallions, keeping the greens and whites separate. Peel and mince or grate 1 teaspoon ginger.  Make the soy glaze: In a small bowl, combine the soy sauce, stock concentrate, 1 teaspoon ginger, 1 Tablespoon sugar, and ¼ cup water.  Cook the steak: Heat a drizzle of oil in a large pan over medium heat. Season the steak on all sides with salt and pepper. Add the steak to the pan and cook for 4-7 minutes per side, or until cooked to desired doneness. Set aside to rest for 5 minutes. Wipe out any black bits in the pan with a paper towel.  Make the wasabi mashed potatoes: While the steak cooks, heat 1 Tablespoon butter and the scallion whites in the same pot you cooked the potatoes in over medium heat. Cook for 30 seconds, until melted and fragrant. Add the drained potatoes, sour cream, and the wasabi (to taste, start with a tiny bit and go up from there!) Mash thoroughly with a fork or potato masher until smooth, adding a splash of water if necessary. Taste and season with salt and pepper.  Cook the spinach: In the same pan you cooked the steak in, heat a drizzle of oil over medium heat. Add the sesame seeds and toast, tossing constantly, for 30 seconds. Add the spinach and a splash of water to the pan and cook, tossing, until wilted, for 1-2 minutes. Season with salt and pepper, then set aside, covered, to keep warm.  Reduce the soy glaze: Add the soy glaze to the same pan you cooked the spinach in. Bring the mixture to a simmer over medium heat and reduce until slightly thickened, for 1-2 minutes. 8 Plate: Thinly slice the steak against the grain and serve alongside the spinach and wasabi mashed potatoes. Drizzle the soy glaze over the steak and garnish with the scallion greens. Enjoy!',
          'user_id' => '2',

        ]);

        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Turkish Meatballs',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/565896a879a23c98718b4567.jpg?t=20151217110502',
          'description' => 'with Parsnip and Creamy Polenta',
          'ingredients' => 'Parsnip, Carrot, Red Onion, Cilantro, Ground Beef, Turkish Spice Blend, Panko (Wheat, Soy), Gluten Free Chicken Stock Concentrate, Diced Tomatoes, Corn Meal Polenta, Sour Cream (Milk)',
          'instructions' => 'Prep the ingredients: Peel and finely dice the carrot and parsnip. Halve, peel, and finely chop the onion. Finely chop the cilantro leaves and stems, reserving a few leaves for garnish.  Cook the vegetables: Heat a drizzle of olive oil in a large pan over medium-high heat. Add the parsnip, carrot, and onion to the pan and cook, tossing, for 10-12 minutes, until very soft. Season with salt and pepper.  Form the meatballs: Meanwhile, in a medium bowl, combine the ground beef, panko, a drizzle of olive oil, 1 teaspoon Turkish spice blend (we are sending more), half the cilantro, and a large pinch of salt and pepper. Form the mixture into golf ball-sized meatballs and set aside.  Make the sauce: Once the vegetables are soft, add the remaining Turkish spice blend to the pan and cook 30 seconds, until fragrant. Add the crushed tomatoes, 1 stock concentrate, and 1 cup water to the pan and stir to combine. Bring to a boil, then reduce to a simmer.  Cook the meatballs: Nestle the meatballs into the simmering sauce and cook, rotating halfway through cooking, for about 10 minutes, or until meatballs are cooked through.  Make the polenta: While the meatballs cook, in a small pot, bring 2 cups water and the remaining chicken stock concentrate to a boil. Once boiling, add the polenta and whisk constantly, until thickened, for 2-3 minutes. Stir 1 Tablespoon butter into the pot and season with salt and pepper.  Remove the cooked meatballs from the sauce and stir in half the sour cream and the remaining cilantro. Taste and season with salt and pepper. 8 Plate the polenta, then top with the sauce and meatballs. Finish with a dollop of sour cream and a few leaves of cilantro. Enjoy!',
          'user_id' => '1',

        ]);

        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Glazed Pork Tenderloin',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/5658cc484dab71572d8b4567.jpg?t=20151218093617',
          'description' => 'with Caramelized Sweet Potato and Crispy Green Beans',
          'ingredients' => 'Sweet Potato, Thyme, Green Beans, Garlic, Pork Tenderloin, Gluten Free Chicken Stock Concentrate, Maple Syrup',
          'instructions' => 'Roast the sweet potato: Preheat the oven to 400 degrees. Peel and dice the sweet potato into ½-inch cubes. Toss the sweet potato on one side of a baking sheet with a drizzle of olive oil and season with salt and pepper. Place in the oven for 20-25 minutes, tossing halfway through cooking, until golden brown.  Prep the ingredients: Mince or grate the garlic. Strip the thyme leaves off the stems and roughly chop. Trim the green beans. Roast the green beans: After the sweet potatoes have cooked for about 10 minutes, place the green beans on the other side of the baking sheet and toss with a drizzle of olive oil. Season with salt and pepper. Return to the oven for about 15 minutes, until the green beans are golden brown and crispy.  Cook the pork: Heat a drizzle of oil in a medium pan over medium-high heat. Season the pork tenderloin on all sides with salt and pepper. Sear the pork tenderloin 3-4 minutes per side, until golden brown all around. Transfer the pork tenderloin to the baking sheet in the oven to finish cooking for 6-8 minutes, until cooked to desired doneness. Make the glaze: Heat another drizzle of oil over medium heat in the same pan you cooked the pork in. Add the garlic and thyme and cook, tossing, about 30 seconds, until fragrant. Add the maple syrup and chicken stock concentrate, and 1/2 cup water, scraping up any browned bits from the bottom of the pan. Bring to a simmer for 2-3 minutes, until thickened and reduced by 3/4. Remove the pan from the heat and stir in 1 Tablespoon butter, and season with salt and pepper. Remove the baking sheet from the oven and let the pork tenderloin rest for 2-3 minutes before thinly slicing.  Finish: Plate a bed of crispy green beans and caramelized sweet potatoes, then top with the sliced pork tenderloin. Drizzle with the glaze and enjoy!',
          'user_id' => '1',

        ]);

        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Trout en Papillote',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/5658d5104dab71dc2d8b4568.jpg?t=20151218063329',
          'description' => 'with Roasted Brussels Sprouts and Shiitake Mushroom Pan-Sauce',
          'ingredients' => 'Brussels Sprouts, Shiitake Mushrooms, Parsley, Lemon, Rainbow Trout (Fish), Rosemary, Garlic, Shallot, Gluten Free Vegetable Stock Concentrate, Flour (Wheat)',
          'instructions' => 'Prep the ingredients: Preheat the oven to 400 degrees. Trim and halve the Brussels sprouts lengthwise. Thinly slice the mushrooms. Thinly slice the garlic. Halve, peel, and finely dice the shallot. Thinly slice the lemon into rounds. Finely chop the parsley, reserving a few leaves for garnish.  Roast the Brussels sprouts: Toss the Brussels sprouts on one side of a baking sheet with a drizzle of oil and a pinch of salt and pepper. Place in the oven for 20-25 minutes, until golden brown and tender.  Assemble the papillote: Lay out a large piece of tin foil and place a drizzle of oil into the center of the foil. Season the trout on all sides with salt and pepper, then place 1 fillet into the center of the foil. Top with a lemon round and a sprig of rosemary, then gather the edges of the foil to seal into a package. Repeat with the remaining fillet. Place the packages onto the baking sheet with the Brussels sprouts and return to the oven for about 15 minutes, until the Brussels sprouts are golden brown and the fish is opaque.  Cook the vegetables: Heat a drizzle of oil in a large pan over medium-high heat. Add the shallots, garlic, and shiitake mushrooms to the pan and cook, tossing, for 4-5 minutes, until softened and slightly golden brown. Set aside.  Make the mushroom pan sauce: Heat 2 Tablespoons butter in the same pan over medium heat. Once melted, whisk the flour into the pan and cook, whisking constantly, for 1 minute. Very gradually add 1 cup water, whisking constantly, until combined. Add the stock concentrate, parsley, and the mushroom mixture to the pan and stir to combine. Bring to a boil, then simmer for 3-4 minutes, until thickened.  Finish: When the trout is ready, remove it from the foil and plate alongside the roasted Brussels sprouts. Spoon the mushroom pan sauce over the fish, then garnish with the reserved parsley leaves and a lemon round. Enjoy!',
          'user_id' => '2',

        ]);

        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Coconut-Crusted Chicken Fingers',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/565dc20179a23cdd658b4567.jpg?t=20151214135150',
          'description' => 'with Garlic Green Beans and Spiced Sweet Potato Fries',
          'ingredients' => 'Paprika, Sweet Potato, Chicken Breast, Shredded Unsweetened Coconut, Honey, Panko (Wheat, Soy), Garlic Powder, Green Beans',
          'instructions' => 'Make the sweet potato fries: Heat the oven to 400 degrees. Peel the sweet potato, then cut into ½-inch sticks (like French fries!). Toss on a baking sheet with a drizzle of oil, the paprika, and a pinch of salt and pepper. Place in the oven for 20-25 minutes, tossing halfway through cooking, until golden brown.  Prep and coat the chicken fingers: Combine the panko and the coconut flakes in a small dish with a pinch of salt and pepper. Place the honey and a drizzle of oil in a medium bowl. Cut the chicken breasts into 1-inch strips (like chicken fingers!). Toss the chicken strips into the honey mixture to coat, then season with salt and pepper. Working one at a time, press each strip into the coconut mixture to adhere. Place the coated strips aside. Cook the green beans: Heat a drizzle of oil in a large pan over medium-high heat. Add the green beans and garlic powder to the pan and cook, tossing, for 4-6 minutes, until the beans are starting to blister. Season with salt and pepper. Set aside, covered, to keep warm.  Cook the chicken fingers: Heat a thin layer of oil in the same pan over medium-high heat. Add the chicken strips to the pan and cook for 2-3 minutes per side, until golden brown and cooked through.  Plate: Serve the chicken fingers with the sweet potato fries and the green beans alongside. Enjoy!',
          'user_id' => '3',

        ]);

        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Steak Au Poivre',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/565dc3b279a23c09668b4567.jpg?t=20151214135244',
          'description' => 'with Cheesy Hesselbeck Potatoes, Creamed Kale, and Shallot-Peppercorn Sauce',
          'ingredients' => 'Yukon Potatoes, Kale, Shallot, Black Peppercorns, Sirloin Steak, Parmesan Cheese (Milk), Sour Cream (Milk), Gluten Free Beef Stock Concentrate, Garlic',
          'instructions' => 'Make the hasselback potatoes: Preheat the oven to 450 degrees. Cut very thin slits vertically into each potato, stopping when you get ¾ of the way through. Be careful not to cut all the way through! Place the potatoes on a foil-lined baking sheet and drizzle with olive oil. Rub the olive oil in between all the slits and season with salt and pepper. Place baking sheet in the oven for 25-35 minutes, until potatoes are tender and golden brown on the edges. TIP: Place two skewers or chopsticks on each side of the potato, perpendicular to your knife, to keep you from slicing all the way down through the potato.  Prep the ingredients: Halve, peel, and mince the shallot. Mince or grate the garlic. Remove and discard the kale stems and ribs, then thinly slice the leaves. Using a flat mallet or a pan, crush the peppercorns inside their bag until coarsely ground.  Start the kale: Heat a drizzle of oil in a large pan over medium heat. Add half the garlic to the pan and cook for 30 seconds, until fragrant. Add the kale to the pan along with a splash of water. Cook, tossing, for 4-5 minutes, until very soft. Season with salt and pepper. Remove the pan from the heat and set aside—we’ll come back to it later! Sear the steak: Heat a drizzle of oil in a medium pan over medium-high heat. Season the steak on all sides with salt and pepper. Add the steak to the pan and sear for 2-4 minutes per side, until browned but not yet cooked to desired doneness. Set aside.  Once the potatoes are tender, remove the baking sheet from the oven. Sprinkle the potatoes with the Parmesan cheese, carefully placing the cheese in between the layers. Place the steak on the baking sheet and return to the oven for 4-6 minutes, until the cheese bubbles and the steak is cooked to desired doneness. Remove the baking sheet from oven and let the steak rest for 5 minutes.  Make the shallot-peppercorn sauce: Meanwhile, heat another drizzle of oil in the same pan you cooked the steak in. Add the shallots, remaining garlic, and crushed peppercorn (to taste, start with a little and go up from there) to the pan. Cook, tossing, for 2-3 minutes, until softened. Add the stock concentrate and ½ cup water to the pan and scape up any browned bits from the bottom of the pan. Bring to a simmer and reduce until thickened. Remove the pan from the heat, then swirl in 2 teaspoons sour cream and 1 Tablespoon butter. Taste and season with salt and pepper.  Finish the kale: Return the kale to medium-low heat and stir in the remaining sour cream. Season with salt and pepper. 8 Plate: Slice the steak against the grain, then serve alongside the hasselback potatoes and creamed kale. Drizzle the steak with the shallot-peppercorn sauce and enjoy!',
          'user_id' => '2',

        ]);

    }
}
