/*
 * Copyright 2011 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

goog.provide('twig.functions');

goog.require('twig');
goog.require('twig.Markup');

goog.require('goog.string');
goog.require('goog.object');

/**
 * @param {goog.array.ArrayLike|Object} value
 * @return {goog.array.ArrayLike|Object|string|number}
 */
twig.functions.max = function(value) {
	if (goog.isArray(value)) {
		return Math.max.apply(null, value);
	} else if (goog.isObject(value)) {
		return Math.max.apply(null, goog.object.getValues(value));
	} else {
		return Math.max.apply(null, arguments);
	}
};

/**
 * @param {goog.array.ArrayLike|Object} value
 * @return {goog.array.ArrayLike|Object|string|number}
 */
twig.functions.min = function(value) {
	if (goog.isArray(value)) {
		return Math.min.apply(null, value);
	} else if (goog.isObject(value)) {
		return Math.min.apply(null, goog.object.getValues(value));
	} else {
		return Math.min.apply(null, arguments);
	}
};

/**
 * @param {twig.Environment} env
 * @param {goog.array.ArrayLike|Object} value
 * @return {goog.array.ArrayLike|Object|string|number}
 */
twig.functions.random = function(env, value) {
	if (goog.isArray(value) || goog.isString(value)) {
		var index = Math.floor(Math.random() * value.length);
		return value[index];
	} else if (goog.isNumber(value)) {
		return Math.floor(Math.random() * value);
	} else if (value === null || typeof value === "undefined") {
		return Math.floor(Math.random() * 2147483647);
	}
	return "";
};
