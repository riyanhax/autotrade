//
// Transaction.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation



public struct Transaction: Codable {

    public var transactID: String
    public var account: Double?
    public var currency: String?
    public var transactType: String?
    public var amount: Double?
    public var fee: Double?
    public var transactStatus: String?
    public var address: String?
    public var tx: String?
    public var text: String?
    public var transactTime: Date?
    public var timestamp: Date?

    public init(transactID: String, account: Double?, currency: String?, transactType: String?, amount: Double?, fee: Double?, transactStatus: String?, address: String?, tx: String?, text: String?, transactTime: Date?, timestamp: Date?) {
        self.transactID = transactID
        self.account = account
        self.currency = currency
        self.transactType = transactType
        self.amount = amount
        self.fee = fee
        self.transactStatus = transactStatus
        self.address = address
        self.tx = tx
        self.text = text
        self.transactTime = transactTime
        self.timestamp = timestamp
    }


}

