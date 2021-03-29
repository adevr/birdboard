<!DOCTYPE html>
<html>

<head>
    <title>BirdBoard</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
<div class="container mx-auto mt-56">
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-500">CREATE A PROJECT</h3>
                <p class="mt-1 text-sm text-gray-600">
                    This information will be displayed publicly so be careful what you share.
                </p>
            </div>
            <form action="#" method="POST">
                <div class="sm:rounded-md sm:overflow-hidden">
                    <div class=" py-5 bg-white space-y-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-3">
                                <label for="company_website" class="block text-sm font-medium text-gray-700">
                                    Website
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                About
                            </label>
                            <div class="mt-1">
                                <textarea id="about" name="about" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                          placeholder="you@example.com"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Brief description for your profile. URLs are hyperlinked.
                            </p>
                        </div>
                    </div>
                    <div class="px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
