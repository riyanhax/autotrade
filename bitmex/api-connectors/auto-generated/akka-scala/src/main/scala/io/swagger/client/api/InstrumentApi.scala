/**
 * BitMEX API
 * ## REST API for the BitMEX Trading Platform  [View Changelog](/app/apiChangelog)    #### Getting Started  Base URI: [https://www.bitmex.com/api/v1](/api/v1)  ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](/app/restAPI).  *All* table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  *This is only a small subset of what is available, to get you started.*  Fill in the parameters and click the `Try it out!` button to try any of these queries.  * [Pricing Data](#!/Quote/Quote_get)  * [Trade Data](#!/Trade/Trade_get)  * [OrderBook Data](#!/OrderBook/OrderBook_getL2)  * [Settlement Data](#!/Settlement/Settlement_get)  * [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  ##### Swagger Specification  [⇩ Download Swagger JSON](swagger.json)    ## All API Endpoints  Click to expand a section. 
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */
package io.swagger.client.api

import org.joda.time.DateTime
import io.swagger.client.model.Error
import io.swagger.client.model.IndexComposite
import io.swagger.client.model.Instrument
import io.swagger.client.model.InstrumentInterval
import io.swagger.client.core._
import io.swagger.client.core.CollectionFormats._
import io.swagger.client.core.ApiKeyLocations._

object InstrumentApi {

  /**
   * This returns all instruments and indices, including those that have settled or are unlisted. Use this endpoint if you want to query for individual instruments or use a complex filter. Use &#x60;/instrument/active&#x60; to return active instruments, or use a filter like &#x60;{\&quot;state\&quot;: \&quot;Open\&quot;}&#x60;.
   * 
   * Expected answers:
   *   code 200 : Seq[Instrument] (Request was successful)
   *   code 400 : Error (Parameter Error)
   *   code 401 : Error (Unauthorized)
   *   code 404 : Error (Not Found)
   * 
   * @param symbol Instrument symbol. Send a bare series (e.g. XBU) to get data for the nearest expiring contract in that series.  You can also send a timeframe, e.g. &#x60;XBU:monthly&#x60;. Timeframes are &#x60;daily&#x60;, &#x60;weekly&#x60;, &#x60;monthly&#x60;, &#x60;quarterly&#x60;, and &#x60;biquarterly&#x60;.
   * @param filter Generic table filter. Send JSON key/value pairs, such as &#x60;{\&quot;key\&quot;: \&quot;value\&quot;}&#x60;. You can key on individual fields, and do more advanced querying on timestamps. See the [Timestamp Docs](https://www.bitmex.com/app/restAPI#Timestamp-Filters) for more details.
   * @param columns Array of column names to fetch. If omitted, will return all columns.  Note that this method will always return item keys, even when not specified, so you may receive more columns that you expect.
   * @param count Number of results to fetch.
   * @param start Starting point for results.
   * @param reverse If true, will sort results newest first.
   * @param startTime Starting date filter for results.
   * @param endTime Ending date filter for results.
   */
  def instrument.get(symbol: Option[String] = None, filter: Option[String] = None, columns: Option[String] = None, count: Option[Double], start: Option[Double], reverse: Option[Boolean], startTime: Option[DateTime] = None, endTime: Option[DateTime] = None): ApiRequest[Seq[Instrument]] =
    ApiRequest[Seq[Instrument]](ApiMethods.GET, "https://localhost/api/v1", "/instrument", "application/json")
      .withQueryParam("symbol", symbol)
      .withQueryParam("filter", filter)
      .withQueryParam("columns", columns)
      .withQueryParam("count", count)
      .withQueryParam("start", start)
      .withQueryParam("reverse", reverse)
      .withQueryParam("startTime", startTime)
      .withQueryParam("endTime", endTime)
      .withSuccessResponse[Seq[Instrument]](200)
      .withErrorResponse[Error](400)
      .withErrorResponse[Error](401)
      .withErrorResponse[Error](404)
        /**
   * 
   * 
   * Expected answers:
   *   code 200 : Seq[Instrument] (Request was successful)
   *   code 400 : Error (Parameter Error)
   *   code 401 : Error (Unauthorized)
   *   code 404 : Error (Not Found)
   */
  def instrument.getActive(): ApiRequest[Seq[Instrument]] =
    ApiRequest[Seq[Instrument]](ApiMethods.GET, "https://localhost/api/v1", "/instrument/active", "application/json")
      .withSuccessResponse[Seq[Instrument]](200)
      .withErrorResponse[Error](400)
      .withErrorResponse[Error](401)
      .withErrorResponse[Error](404)
        /**
   * 
   * 
   * Expected answers:
   *   code 200 : Seq[Instrument] (Request was successful)
   *   code 400 : Error (Parameter Error)
   *   code 401 : Error (Unauthorized)
   *   code 404 : Error (Not Found)
   */
  def instrument.getActiveAndIndices(): ApiRequest[Seq[Instrument]] =
    ApiRequest[Seq[Instrument]](ApiMethods.GET, "https://localhost/api/v1", "/instrument/activeAndIndices", "application/json")
      .withSuccessResponse[Seq[Instrument]](200)
      .withErrorResponse[Error](400)
      .withErrorResponse[Error](401)
      .withErrorResponse[Error](404)
        /**
   * This endpoint is useful for determining which pairs are live. It returns two arrays of   strings. The first is intervals, such as &#x60;[\&quot;BVOL:daily\&quot;, \&quot;BVOL:weekly\&quot;, \&quot;XBU:daily\&quot;, \&quot;XBU:monthly\&quot;, ...]&#x60;. These identifiers are usable in any query&#39;s &#x60;symbol&#x60; param. The second array is the current resolution of these intervals. Results are mapped at the same index.
   * 
   * Expected answers:
   *   code 200 : InstrumentInterval (Request was successful)
   *   code 400 : Error (Parameter Error)
   *   code 401 : Error (Unauthorized)
   *   code 404 : Error (Not Found)
   */
  def instrument.getActiveIntervals(): ApiRequest[InstrumentInterval] =
    ApiRequest[InstrumentInterval](ApiMethods.GET, "https://localhost/api/v1", "/instrument/activeIntervals", "application/json")
      .withSuccessResponse[InstrumentInterval](200)
      .withErrorResponse[Error](400)
      .withErrorResponse[Error](401)
      .withErrorResponse[Error](404)
        /**
   * Composite indices are built from multiple external price sources.  Use this endpoint to get the underlying prices of an index. For example, send a &#x60;symbol&#x60; of &#x60;.XBT&#x60; to get the ticks and weights of the constituent exchanges that build the \&quot;.XBT\&quot; index.  A tick with reference &#x60;\&quot;BMI\&quot;&#x60; and weight &#x60;null&#x60; is the composite index tick. 
   * 
   * Expected answers:
   *   code 200 : Seq[IndexComposite] (Request was successful)
   *   code 400 : Error (Parameter Error)
   *   code 401 : Error (Unauthorized)
   *   code 404 : Error (Not Found)
   * 
   * @param account 
   * @param symbol The composite index symbol.
   * @param filter Generic table filter. Send JSON key/value pairs, such as &#x60;{\&quot;key\&quot;: \&quot;value\&quot;}&#x60;. You can key on individual fields, and do more advanced querying on timestamps. See the [Timestamp Docs](https://www.bitmex.com/app/restAPI#Timestamp-Filters) for more details.
   * @param columns Array of column names to fetch. If omitted, will return all columns.  Note that this method will always return item keys, even when not specified, so you may receive more columns that you expect.
   * @param count Number of results to fetch.
   * @param start Starting point for results.
   * @param reverse If true, will sort results newest first.
   * @param startTime Starting date filter for results.
   * @param endTime Ending date filter for results.
   */
  def instrument.getCompositeIndex(account: Option[Double] = None, symbol: Option[String], filter: Option[String] = None, columns: Option[String] = None, count: Option[Double], start: Option[Double], reverse: Option[Boolean], startTime: Option[DateTime] = None, endTime: Option[DateTime] = None): ApiRequest[Seq[IndexComposite]] =
    ApiRequest[Seq[IndexComposite]](ApiMethods.GET, "https://localhost/api/v1", "/instrument/compositeIndex", "application/json")
      .withQueryParam("account", account)
      .withQueryParam("symbol", symbol)
      .withQueryParam("filter", filter)
      .withQueryParam("columns", columns)
      .withQueryParam("count", count)
      .withQueryParam("start", start)
      .withQueryParam("reverse", reverse)
      .withQueryParam("startTime", startTime)
      .withQueryParam("endTime", endTime)
      .withSuccessResponse[Seq[IndexComposite]](200)
      .withErrorResponse[Error](400)
      .withErrorResponse[Error](401)
      .withErrorResponse[Error](404)
        /**
   * 
   * 
   * Expected answers:
   *   code 200 : Seq[Instrument] (Request was successful)
   *   code 400 : Error (Parameter Error)
   *   code 401 : Error (Unauthorized)
   *   code 404 : Error (Not Found)
   */
  def instrument.getIndices(): ApiRequest[Seq[Instrument]] =
    ApiRequest[Seq[Instrument]](ApiMethods.GET, "https://localhost/api/v1", "/instrument/indices", "application/json")
      .withSuccessResponse[Seq[Instrument]](200)
      .withErrorResponse[Error](400)
      .withErrorResponse[Error](401)
      .withErrorResponse[Error](404)
      

}

